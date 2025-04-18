<script>
    function setupImagePreview(inputSelector, previewSelector) {
        const input = document.querySelector(inputSelector);
        const previewImg = document.querySelector(previewSelector);
        const removeBtn = previewImg.parentElement.querySelector('.remove-btn');

        input.click();

        input.addEventListener('change', function () {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImg.src = e.target.result;
                    removeBtn.style.display = 'block';
                };
                reader.readAsDataURL(this.files[0]);
            }
        });

        removeBtn.addEventListener('click', function () {
            previewImg.src = "https://melbournebuildingproducts.com.au/assets/placeholder-image-2.png";
            input.value = '';
            this.style.display = 'none';
        });
    }
</script>

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('categories.index') }}",
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'bn_name',
                    name: 'bn_name'
                },
                {
                    data: 'en_name',
                    name: 'en_name'
                },
                {
                    data: 'parent_category',
                    name: 'parent_category'
                },
                {
                    data: 'show_in_menu',
                    name: 'show_in_menu'
                },
                {
                    data: 'show_in_home',
                    name: 'show_in_home'
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        function filterData() {
            let parrentCategory = $('#parent_category').val();
            let showInMenu = $('#show_in_menu').val();
            let showInHome = $('#show_in_home').val();
            $('#dataTable').DataTable().ajax.url("{{ route('categories.index') }}?parent_category=" + parrentCategory + "&show_in_menu=" + showInMenu + "&show_in_home=" + showInHome).load();
        }

        $('#parent_category, #show_in_menu, #show_in_home').on('change', function () {
            filterData();
        });

        $('#createCategoryForm').on('submit', function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            let url = $(this).attr('action');
            let method = $(this).attr('method');
            $.ajax({
                url: url,
                type: method,
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').text('');
                    $('#submitBtn').attr('disabled', true);
                    $('#submitBtn').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...');
                },
                success: function (response) {
                    if (response.status == 'success') {
                        $('#createModal').modal('hide');
                        $('#dataTable').DataTable().ajax.reload();
                        notify('success', response.message);
                    }
                },
                error: function (xhr, status, error) {
                    if (xhr.status == 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            notify('error', value);
                            let input = $('[name="' + key + '"]');
                            input.addClass('is-invalid');
                            input.next('.invalid-feedback').text(value);
                        });
                    } else if (xhr.status === 429) {
                        notify('error', 'Too many failed attempts. Please try again later.');
                    } else if (xhr.status === 500) {
                        notify('error', 'Something went wrong on our end. Please try again later.');
                    } else {
                        notify('error', error);
                    }
                },
                complete: function () {
                    $('#submitBtn').attr('disabled', false);
                    $('#submitBtn').html('Save');
                }
            });
        })

        $('body').on('click', '.edit', function () {
            let id = $(this).data('id');
            $('#loader').show();
            $.get("{{ route('categories.edit', ':id') }}".replace(':id', id), function (
                response) {
                $('#loader').hide();
                if (response.status === 'error') {
                    notify('error', response.message);
                    return;
                }

                // Set modal title and form method
                $('#createModal .modal-title').text('Edit Category');
                $('#createCategoryForm').attr('action',
                    "{{ route('categories.update', ':id') }}".replace(':id', id));
                $('#method').val('PUT');

                // Populate fields
                $('#en_name').val(response.data.en_name);
                $('#bn_name').val(response.data.bn_name);
                $('#parent_id').val(response.data.parent_id).trigger('change');
                $('#description').val(response.data.description);
                $('#showInMenu').prop('checked', response.data.show_in_menu == 1);
                $('#showInHome').prop('checked', response.data.show_in_home == 1);
                $('#createModal').modal('show');
            }).fail(function () {
                $('#loader').hide();
                notify('error', 'Something went wrong. Please try again.');
            });
        });

        $('body').on('click', '.delete', function () {
            let id = $(this).data('id');
            let url = "{{ route('categories.destroy', ':id') }}".replace(':id', id);
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: { _token: '{{ csrf_token() }}' },
                        success: function (response) {
                            if (response.status == 'success') {
                                $('#dataTable').DataTable().ajax.reload();
                                notify('success', response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            if (xhr.status === 429) {
                                notify('error', 'Too many failed attempts. Please try again later.');
                            } else if (xhr.status === 500) {
                                notify('error', 'Something went wrong on our end. Please try again later.');
                            } else {
                                notify('error', error);
                            }
                        }
                    });
                }
            });
        })

        // toggle show in menu and show in home
        $('body').on('click', '.show-in-menu, .show-in-home', function () {
            let id = $(this).data('id');
            let checked = $(this).is(':checked');
            let field = $(this).data('field');
            let status = checked ? 1 : 0;
            $.ajax({
                url: "{{ route('categories.toggle.visibility', ':id') }}".replace(':id', id),
                type: 'GET',
                data: {
                    field_name: field,
                    status: status
                },
                success: function (response) {
                    if (response.status == 'success') {
                        notify('success', response.message);
                    }
                },
                error: function (xhr, status, error) {
                    if (xhr.status == 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            notify('error', value);
                        });
                    } else if (xhr.status === 429) {
                        notify('error', 'Too many failed attempts. Please try again later.');
                    } else if (xhr.status === 500) {
                        notify('error', 'Something went wrong on our end. Please try again later.');
                    } else {
                        notify('error', error);
                    }
                }
            });
        });
    });
</script>
