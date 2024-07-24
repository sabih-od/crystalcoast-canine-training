<?php

namespace App\Services\Admin;

use App\Models\TrainingGallery;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TrainingService
{
    private static $instance;
    private $trainingModel;
    private function __construct()
    {
        $this->trainingModel = new TrainingGallery();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new TrainingService();
        }
        return self::$instance;
    }


    public function getAllTrainings($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->trainingModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->trainingModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function datatable()
    {
        $trainings = $this->getAllTrainings();
        return DataTables::of($trainings)
            ->addColumn('created_by', function ($data) {
                return $data->user ? $data->user->name : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.training.edit', ['training' => $data->id]);
                $deleteRoute = route('admin.training.destroy', ['training' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson(); //--- Returning Json Data To Client Side
    }


    public
        function deleteTraining(
        $trainging
    ) {
        try {
            if (Storage::disk('public')->exists($trainging->image)) {
                Storage::disk('public')->delete($trainging->image);
                $trainging->delete();
            }
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createTraining($request)
    {
        try {
            $traingingData = $request->file('image')->store('training', 'public');

            DB::beginTransaction();
            $training = $this->trainingModel->create([
                'image' => $traingingData, // Adjust this according to your model's fillable fields
            ]);
            DB::commit();
            return $training;

        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateTraining($training, $request)
    {

        try {
            if ($training) {
                if (Storage::disk('public')->exists($training->image)) {
                    Storage::disk('public')->delete($training->image);

                }
                $trainingData = $request->file('image')->store('training', 'public');

                $training->update([
                    'image' => $trainingData,
                ]);

            } else {
                throw new \Exception("Training Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function trainingIndexView(
    ) {
        return 'admin.pages.trainings.index';
    }

    public
        function trainingCreateView(
    ) {

        return 'admin.pages.trainings.create';
    }

    public
        function trainingEditView(
    ) {

        return 'admin.pages.trainings.edit';
    }

    public
        function trainingReturnRoute(
    ) {
        return 'admin.trainings.index';
    }
}
