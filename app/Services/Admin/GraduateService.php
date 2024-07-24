<?php

namespace App\Services\Admin;


use App\Models\GraduateGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class GraduateService
{
    private static $instance;
    private $graduateModel;
    private function __construct()
    {
        $this->graduateModel = new GraduateGallery();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new GraduateService();
        }
        return self::$instance;
    }


    public function getAllGraduates($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->graduateModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->graduateModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function datatable()
    {
        $graduates = $this->getAllGraduates();
        return DataTables::of($graduates)
            ->addColumn('created_by', function ($data) {
                return $data->user ? $data->user->name : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.graduate.edit', ['graduate' => $data->id]);
                $deleteRoute = route('admin.graduate.destroy', ['graduate' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson(); //--- Returning Json Data To Client Side
    }


    public
        function deleteGraduate(
        $graduate
    ) {
        try {
            if (Storage::disk('public')->exists($graduate->image)) {
                Storage::disk('public')->delete($graduate->image);

                $graduate->delete();
            }
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createGraduate($request)
    {
        try {
            $graduateData = $request->file('image')->store('graduate', 'public');

            DB::beginTransaction();
            $graduate = $this->graduateModel->create([
                'image' => $graduateData, // Adjust this according to your model's fillable fields
            ]);
            DB::commit();

            return $graduate;

        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateGraduate($graduate, $request)
    {

        try {
            if ($graduate) {
                if (Storage::disk('public')->exists($graduate->image)) {
                    Storage::disk('public')->delete($graduate->image);

                }
                $graduateData = $request->file('image')->store('graduate', 'public');

                $graduate->update([
                    'image' => $graduateData,
                ]);


            } else {
                throw new \Exception("Graduate Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function graduateIndexView(
    ) {
        return 'admin.pages.graduates.index';
    }

    public
        function graduateCreateView(
    ) {

        return 'admin.pages.graduates.create';
    }

    public
        function graduateEditView(
    ) {

        return 'admin.pages.graduates.edit';
    }

    public
        function graduateReturnRoute(
    ) {
        return 'admin.graduates.index';
    }
}
