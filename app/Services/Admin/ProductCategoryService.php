<?php

namespace App\Services\Admin;

use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryService
{
    private static $instance;
    private $productCategoryModel;
    private function __construct()
    {
        $this->productCategoryModel = new ProductCategory();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new ProductCategoryService();
        }
        return self::$instance;
    }


    public function getAllProductCategory($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->productCategoryModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->productCategoryModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function datatable()
    {
        $category = $this->getAllProductCategory();
        return DataTables::of($category)
        ->editColumn('created_at', function ($data) {
            $formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('m-d-Y');
            return $formattedDate;
        })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.category.edit', ['category' => $data->id]);
                $deleteRoute = route('admin.category.destroy', ['category' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }


    public
        function deleteProductCategory(
        $category
    ) {
        try {
            $category->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createProductCategory($categoryData)
    {
        try {
            DB::beginTransaction();
            $category = $this->productCategoryModel->create($categoryData);
            DB::commit();
            return $category;
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateProductCategory($category, $categoryData)
    {

        try {
            if ($category) {
                $category->update($categoryData);
            } else {
                throw new \Exception("Product Category Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function categoryIndexView(
    ) {
        return 'admin.pages.product-categories.index';
    }

    public
        function categoryCreateView(
    ) {

        return 'admin.pages.product-categories.create';
    }

    public
        function categoryEditView(
    ) {

        return 'admin.pages.product-categories.edit';
    }

    public
        function categoryReturnRoute(
    ) {
        return 'admin.categories.index';
    }


}
