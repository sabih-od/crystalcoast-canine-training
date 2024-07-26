<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\BehaviorRequest;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Models\Behavior;
use App\Models\ProductCategory;
use App\Services\Admin\ProductCategoryService;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $categoryService;


    public function __construct(
        ProductCategoryService $categoryService
    ) {
        $this->categoryService = $categoryService;
    }



    public function index(Request $request)
    {
        $category = $this->categoryService->getAllProductCategory();

        if ($category instanceof \Exception) {
            return WebResponses::errorRedirectBack($category->getMessage());
        }

        if ($request->ajax()) {
            return $this->categoryService->datatable();
        }

        return view($this->categoryService->categoryIndexView(), compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->categoryService->categoryCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $create = $this->categoryService->createProductCategory($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->categoryService->categoryReturnRoute())
            ->with('success', 'Blog Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $category)
    {
        try {
            return view(
                $this->categoryService->categoryEditView(),
                compact('category', )
            );

        } catch (\Exception $e) {
            return WebResponses::errorRedirectBack($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $category)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $category = $this->categoryService->updateProductCategory($category, $request->all());

        if ($category instanceof \Exception) {
            return WebResponses::errorRedirectBack($category->getMessage());
        }

        return redirect()->route($this->categoryService->categoryReturnRoute())
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $category)
    {
        $category = $this->categoryService->deleteProductCategory($category);

        if ($category instanceof \Exception) {
            return APIResponse::exception($category->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
