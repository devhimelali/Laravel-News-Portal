@extends('layouts.app')
@section('title', 'Categories')
@section('content')
    <!-- breadcrumb section start -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Categories</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('redirect') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb section end -->
    <!-- table section start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header d-flex align-items-center p-0">
                        <h5 class="card-title mb-0 flex-grow-1">Categories</h5>
                        <div class="flex-shrink-0 d-flex gap-2">
                            <div>
                                <select name="parent_category" id="parent_category" class="form-control">
                                    <option value="">Select Parent Category</option>
                                    @foreach ($parentCategories as $parentCategory)
                                        <option
                                            value="{{ $parentCategory->id }}">{{ $parentCategory->en_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select name="show_in_menu" id="show_in_menu" class="form-control">
                                    <option value="">Select Show in Menu</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div>
                                <select name="show_in_home" id="show_in_home" class="form-control">
                                    <option value="">Select Show in Home</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#createModal">
                                    <i class="ri-add-line"></i> Create
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0" id="dataTable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="max-width: 50px; width: 46px">Image</th>
                                <th scope="col">Bengali Name</th>
                                <th scope="col">English Name</th>
                                <th scope="col">Parent Category</th>
                                <th scope="col" style="max-width: 105px; width: 105px">Show in Menu</th>
                                <th scope="col" style="max-width: 105px; width: 105px">Show in Home</th>
                                <th scope="col" style="max-width: 130px; width: 130px">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- table section end -->
    <!-- create modal start -->
    <div id="createModal" class="modal fade" data-bs-backdrop="static" tabindex="-1" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <form action="{{route('categories.store')}}" method="post" id="createCategoryForm">
                @csrf
                <input type="hidden" name="_method" value="POST" id="method">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Create a New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6">
                                <!-- English Name -->
                                <div class="mb-3">
                                    <label for="en_name" class="form-label fw-semibold">English Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="en_name" name="en_name"
                                           placeholder="Enter English Name">
                                </div>
                                <!-- Bengali Name -->
                                <div class="mb-3">
                                    <label for="bn_name" class="form-label fw-semibold">Bengali Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="bn_name" name="bn_name"
                                           placeholder="Enter Bengali Name">
                                </div>
                                <!-- Parent Category -->
                                <div class="mb-3">
                                    <label for="parent_id" class="form-label fw-semibold">Parent Category</label>
                                    <select name="parent_category" id="parent_id" class="form-select">
                                        <option value="">Select Parent Category</option>
                                        @foreach ($parentCategories as $parentCategory)
                                            <option
                                                value="{{ $parentCategory->id }}">{{ $parentCategory->en_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Switches -->
                                <div class="d-flex gap-4 mt-4">
                                    <div class="form-check form-switch form-switch-md form-check-secondary">
                                        <input class="form-check-input" type="checkbox" id="showInMenu"
                                               name="showInMenu">
                                        <label class="form-check-label form-check-label-md" for="showInMenu">Show in
                                            Menu</label>
                                    </div>
                                    <div class="form-check form-switch form-switch-md form-check-secondary">
                                        <input class="form-check-input" type="checkbox" id="showInHome"
                                               name="showInHome">
                                        <label class="form-check-label form-check-label-md" for="showInHome">Show in
                                            Home</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Thumbnail Upload -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold d-block">Thumbnail Image</label>
                                <div class="custom-upload-box text-center"
                                     onclick="document.querySelector('.hidden-input').click()">
                                    <img src="https://melbournebuildingproducts.com.au/assets/placeholder-image-2.png"
                                         class="preview-img" alt="Image Preview">
                                    <button type="button" class="remove-btn removeImage" style="display: none;">×
                                    </button>
                                </div>
                                <input type="file" name="image" class="d-none hidden-input" accept="image/*">

                                <!-- Centered Button -->
                                <div class="text-center mt-2">
                                    <button type="button" class="btn btn-dark"
                                            onclick="setupImagePreview('.hidden-input', '.preview-img')">
                                        <i class="bx bx-cloud-upload fs-5 me-2"></i> Upload Thumbnail
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label fw-semibold">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="5"
                                          placeholder="Enter Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary" id="submitBtn">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- create modal end -->
@endsection
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/cdn/datatables/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('vendor-script')
    <script src="{{ asset('assets/cdn/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/cdn/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection
@section('page-script')
    @include('admin.category.partials.script')
@endsection
@section('page-style')
    <style>
        .form-check-label-md {
            font-size: 16px;
        }

        .custom-upload-box {
            width: 200px;
            height: 200px;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: auto;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            transition: border-color 0.3s ease;
        }

        .custom-upload-box:hover {
            border-color: #999;
        }

        .custom-upload-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .remove-btn {
            position: absolute;
            top: 5px;
            right: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
            cursor: pointer;
        }

    </style>
@endsection
