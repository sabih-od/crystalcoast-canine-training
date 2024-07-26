<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\BehaviorRequest;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Models\Behavior;
use App\Models\PricingCategory;
use App\Services\Admin\PriceCategoryService;

class PriceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $priceCategoryService;


    public function __construct(
        PriceCategoryService $priceCategoryService
    ) {
        $this->priceCategoryService = $priceCategoryService;
    }



    public function index(Request $request)
    {
        $priceCategory = $this->priceCategoryService->getAllPricingCategory();

        if ($priceCategory instanceof \Exception) {
            return WebResponses::errorRedirectBack($priceCategory->getMessage());
        }

        if ($request->ajax()) {
            return $this->priceCategoryService->datatable();
        }

        return view($this->priceCategoryService->priceCategoryIndexView(), compact('priceCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->priceCategoryService->priceCategoryCreateView());
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
            'description' => 'required'
        ]);
        $create = $this->priceCategoryService->createPricingCategory($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->priceCategoryService->priceCategoryReturnRoute())
            ->with('success', 'Blog Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PricingCategory $priceCategory)
    {
        try {
            return view(
                $this->priceCategoryService->priceCategoryEditView(),
                compact('priceCategory', )
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
    public function update(Request $request, PricingCategory $priceCategory)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required'
        ]);
        $priceCategory = $this->priceCategoryService->updatePricingCategory($priceCategory, $request->all());

        if ($priceCategory instanceof \Exception) {
            return WebResponses::errorRedirectBack($priceCategory->getMessage());
        }

        return redirect()->route($this->priceCategoryService->priceCategoryReturnRoute())
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PricingCategory $priceCategory)
    {
        $priceCategory = $this->priceCategoryService->deletePricingCategory($priceCategory);

        if ($priceCategory instanceof \Exception) {
            return APIResponse::exception($priceCategory->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
