<?php

namespace App\Services\Admin;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ProductService
{
    private static $instance;
    private $productModel;
    private function __construct()
    {
        $this->productModel = new Product();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new ProductService();
        }
        return self::$instance;
    }



    public function getAllProduct($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->productModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->productModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function datatable()
    {
        $products = $this->getAllProduct();
        return DataTables::of($products)

            ->addColumn('action', function ($data) {
                $editRoute = route('admin.product.edit', ['product' => $data->id]);
                $deleteRoute = route('admin.product.destroy', ['product' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }



    public function createProduct($productData)
    {
        try {
            $product = $this->productModel->create($productData);
            $product->addMedia($productData['photo'])->toMediaCollection('product_image');
            return $product;

        } catch (\Exception $e) {
            dd($e->getMessage());
            return $e;
        }

    }



    public function updateProduct($product, $productData)
    {

        try {
            if ($product) {
                if (empty($productData['price_category_ids'])) {
                    $productData['price_category_ids'] = [];
                }
                $product->update($productData);
                if (!empty($productData['photo'])) {
                    $product->clearMediaCollection('product_image');
                    $product->addMedia($productData['photo'])->toMediaCollection('product_image');
                }
            } else {
                throw new \Exception("Product Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public
        function deleteProduct(
        $product
    ) {
        try {
            $product->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public
        function productIndexView(
    ) {
        return 'admin.pages.products.index';
    }

    public
        function productCreateView(
    ) {

        return 'admin.pages.products.create';
    }

    public
        function productEditView(
    ) {

        return 'admin.pages.products.edit';
    }

    public
        function productReturnRoute(
    ) {
        return 'admin.products.index';
    }
}
