<?php

namespace App\Services\Admin;

use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PriceService
{
    private static $instance;
    private $priceModel;
    private function __construct()
    {
        $this->priceModel = new Price();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new PriceService();
        }
        return self::$instance;
    }



    public function getAllPrice($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->priceModel->with('priceCategory')->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->priceModel->with('priceCategory')->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function datatable()
    {
        $prices = $this->getAllPrice();
        return DataTables::of($prices)
        ->editColumn('created_at', function ($data) {
            $formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('m-d-Y');
            return $formattedDate;
        })
            ->addColumn('category', function ($data) {
                return $data->priceCategory ? $data->priceCategory->title : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.price.edit', ['price' => $data->id]);
                $deleteRoute = route('admin.price.destroy', ['price' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }



    public function createPrice($priceData)
    {
        try {
            $price = $this->priceModel->create($priceData);
            return $price;

        } catch (\Exception $e) {
            dd($e->getMessage());
            return $e;
        }

    }



    public function updatePrice($price, $priceData)
    {

        try {
            if ($price) {
                $price->update($priceData);
            } else {
                throw new \Exception("Price Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public
        function deletePrice(
        $price
    ) {
        try {
            $price->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public
        function priceIndexView(
    ) {
        return 'admin.pages.prices.index';
    }

    public
        function priceCreateView(
    ) {

        return 'admin.pages.prices.create';
    }

    public
        function priceEditView(
    ) {

        return 'admin.pages.prices.edit';
    }

    public
        function priceReturnRoute(
    ) {
        return 'admin.prices.index';
    }
}
