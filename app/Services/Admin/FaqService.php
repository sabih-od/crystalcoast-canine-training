<?php

namespace App\Services\Admin;

use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class FaqService
{
    private static $instance;
    private $faqModel;
    private function __construct()
    {
        $this->faqModel = new Faq();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new FaqService();
        }
        return self::$instance;
    }


    public function getAllFaqs($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->faqModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->faqModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function datatable()
    {
        $faqs = $this->getAllFaqs();
        return DataTables::of($faqs)
        ->editColumn('created_at', function ($data) {
            $formattedDate = $data->create_at ?  Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->format('m-d-Y') : '';
            return $formattedDate;
        })
            ->addColumn('created_by', function ($data) {
                return $data->user ? $data->user->name : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.faq.edit', ['faq' => $data->id]);
                $deleteRoute = route('admin.faq.destroy', ['faq' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson(); //--- Returning Json Data To Client Side
    }


    public
        function deleteFaq(
        $faq
    ) {
        try {
            $faq->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createFaq($faqData)
    {
        try {
            DB::beginTransaction();
            $blog = $this->faqModel->create($faqData);
            DB::commit();

            return $blog;

        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateFaq($faq, $faqData)
    {

        try {
            if ($faq) {

                $faq->update($faqData);

            } else {
                throw new \Exception("Blog Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function faqIndexView(
    ) {
        return 'admin.pages.faqs.index';
    }

    public
        function faqCreateView(
    ) {

        return 'admin.pages.faqs.create';
    }

    public
        function faqEditView(
    ) {

        return 'admin.pages.faqs.update';
    }

    public
        function faqReturnRoute(
    ) {
        return 'admin.faqs.index';
    }
}
