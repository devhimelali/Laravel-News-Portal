<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    /**
     * @param  CategoryService  $categoryService
     */
    public function __construct(protected CategoryService $categoryService)
    {
    }

    /**
     * Handle the category index page.
     *
     * If the request is an AJAX request, fetch the categories data for the data table.
     * Otherwise, fetch the parent categories and render the index view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(Request $request): JsonResponse|View
    {
        if ($request->ajax()) {
            return $this->categoryService->getFilteredCategoriesForDataTable($request);
        }

        $parentCategories = Category::whereNull('parent_id')->get();
        return view('admin.category.index', compact('parentCategories'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  StoreCategoryRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreCategoryRequest $request): JsonResponse
    {
        $this->categoryService->storeCategory($request);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully',
        ], 201);
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Category $category): JsonResponse
    {
        $category = $this->categoryService->getCategoryById($category);

        return response()->json([
            'status' => 'success',
            'data' => $category,
        ], 200);
    }

    /**
     * Update the specified category in storage.
     *
     * @param  StoreCategoryRequest  $request
     * @param  Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(StoreCategoryRequest $request, Category $category): JsonResponse
    {
        $this->categoryService->updateCategory($request, $category);

        return response()->json([
            'status' => 'success',
            'message' => 'Category updated successfully',
        ], 200);
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        $this->categoryService->deleteCategory($category);

        return response()->json([
            'status' => 'success',
            'message' => 'Category deleted successfully',
        ], 200);
    }

    /**
     * Toggle the visibility of the specified category.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category  $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function toggleVisibility(Request $request, Category $category): JsonResponse
    {
        $this->categoryService->changeStatus($category, $request->field_name, $request->status);

        return response()->json([
            'status' => 'success',
            'message' => 'Visibility updated successfully',
        ]);
    }
}
