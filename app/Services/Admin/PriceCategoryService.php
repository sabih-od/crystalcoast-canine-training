<?php

namespace App\Services\Admin;

use App\Models\PricingCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PriceCategoryService
{
    private static $instance;
    private $priceCategoryModel;
    private function __construct()
    {
        $this->priceCategoryModel = new PricingCategory();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new PriceCategoryService();
        }
        return self::$instance;
    }



    public function relationPriceCategory()
    {
    return $this->priceCategoryModel->with('prices')->get();
    
    }   

    public function getAllPricingCategory($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->priceCategoryModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->priceCategoryModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function datatable()
    {
        $priceCategory = $this->getAllPricingCategory();
        return DataTables::of($priceCategory)
            ->editColumn('created_at', function ($data) {
                $formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('m-d-Y');
                return $formattedDate;
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.priceCategory.edit', ['priceCategory' => $data->id]);
                $deleteRoute = route('admin.priceCategory.destroy', ['priceCategory' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }


    public
        function deletePricingCategory(
        $priceCategory
    ) {
        try {
            $priceCategory->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createPricingCategory($priceCategoryData)
    {
        try {
            DB::beginTransaction();
            $priceCategory = $this->priceCategoryModel->create($priceCategoryData);
            DB::commit();
            return $priceCategory;
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updatePricingCategory($priceCategory, $priceCategoryData)
    {

        try {
            if ($priceCategory) {
                $priceCategory->update($priceCategoryData);
            } else {
                throw new \Exception("Product Category Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function priceCategoryIndexView(
    ) {
        return 'admin.pages.price-categories.index';
    }

    public
        function priceCategoryCreateView(
    ) {

        return 'admin.pages.price-categories.create';
    }

    public
        function priceCategoryEditView(
    ) {

        return 'admin.pages.price-categories.edit';
    }

    public
        function priceCategoryReturnRoute(
    ) {
        return 'admin.priceCategories.index';
    }


}
