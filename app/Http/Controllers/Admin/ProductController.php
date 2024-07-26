<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\BehaviorRequest;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Behavior;
use App\Models\Product;
use App\Services\Admin\PriceCategoryService;
use App\Services\Admin\ProductCategoryService;
use App\Services\Admin\ProductService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $productService;
    protected $pricingCategoryService;

    protected $productCategoryService;
    public function __construct(
        ProductService $productService,
        PriceCategoryService $pricingCategoryService,
        ProductCategoryService $productCategoryService
    ) {
        $this->productService = $productService;
        $this->pricingCategoryService = $pricingCategoryService;
        $this->productCategoryService = $productCategoryService;
    }



    public function index(Request $request)
    {
        $product = $this->productService->getAllProduct();

        if ($product instanceof \Exception) {
            return WebResponses::errorRedirectBack($product->getMessage());
        }

        if ($request->ajax()) {
            return $this->productService->datatable();
        }

        return view($this->productService->productIndexView(), compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->productCategoryService->getAllProductCategory();
        $itemAddons = $this->pricingCategoryService->getAllPricingCategory();
        return view($this->productService->productCreateView(),compact('categories','itemAddons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $create = $this->productService->createProduct($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->productService->productReturnRoute())
            ->with('success', 'Product Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        try {
            $categories = $this->productCategoryService->getAllProductCategory();
            $itemAddons = $this->pricingCategoryService->getAllPricingCategory();
            return view(
                $this->productService->productEditView(),
                compact('product', 'categories', 'itemAddons')
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
    public function update(ProductEditRequest $request, Product $product)
    {
        $product = $this->productService->updateProduct($product, $request->all());

        if ($product instanceof \Exception) {
            return WebResponses::errorRedirectBack($product->getMessage());
        }

        return redirect()->route($this->productService->productReturnRoute())
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = $this->productService->deleteProduct($product);

        if ($product instanceof \Exception) {
            return APIResponse::exception($product->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
