<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\PriceRequest;
use App\Models\Price;
use App\Services\Admin\PriceCategoryService;
use App\Services\Admin\PriceService;


class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $priceService;
    protected $pricingCategoryService;
    public function __construct(
        PriceService $priceService,
        PriceCategoryService $pricingCategoryService
    ) {
        $this->priceService = $priceService;
        $this->pricingCategoryService = $pricingCategoryService;
    }



    public function index(Request $request)
    {
        $price = $this->priceService->getAllPrice();

        if ($price instanceof \Exception) {
            return WebResponses::errorRedirectBack($price->getMessage());
        }

        if ($request->ajax()) {
            return $this->priceService->datatable();
        }

        return view($this->priceService->priceIndexView(), compact('price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->pricingCategoryService->getAllPricingCategory();
        return view($this->priceService->priceCreateView(), compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PriceRequest $request)
    {
        $create = $this->priceService->createPrice($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->priceService->priceReturnRoute())
            ->with('success', 'Price Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        try {
            $categories = $this->pricingCategoryService->getAllPricingCategory();
            return view(
                $this->priceService->priceEditView(),
                compact('price', 'categories')
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
    public function update(PriceRequest $request, Price $price)
    {
        $price = $this->priceService->updatePrice($price, $request->all());

        if ($price instanceof \Exception) {
            return WebResponses::errorRedirectBack($price->getMessage());
        }

        return redirect()->route($this->priceService->priceReturnRoute())
            ->with('success', 'Price updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price = $this->priceService->deletePrice($price);

        if ($price instanceof \Exception) {
            return APIResponse::exception($price->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
