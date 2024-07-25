<?php

namespace App\Services\Admin;

use App\Models\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class TrainingContentService
{
    private static $instance;
    private $trainingContentModel;
    private function __construct()
    {
        $this->trainingContentModel = new Training();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new TrainingContentService();
        }
        return self::$instance;
    }


    public function getAllTrainingContents($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->trainingContentModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->trainingContentModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function datatable()
    {
        $TrainingContents = $this->getAllTrainingContents();
        return DataTables::of($TrainingContents)
            ->addColumn('created_by', function ($data) {
                return $data->user ? $data->user->name : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.trainingContent.edit', ['training' => $data->id]);
                $deleteRoute = route('admin.trainingContent.destroy', ['training' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson(); //--- Returning Json Data To Client Side
    }


    public
        function deleteTrainingContent(
        $TrainingContent
    ) {
        try {
            $TrainingContent->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createTrainingContent($trainingContentData)
    {
        try {
            DB::beginTransaction();

            $trainingContent = $this->trainingContentModel->create($trainingContentData);
            $trainingContent->addMedia($trainingContentData['image'])->toMediaCollection('training_img');
            DB::commit();
            return $trainingContent;
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateTrainingContent($trainingContent, $trainingContentData)
    {

        try {
            if ($trainingContent) {
                $trainingContent->update($trainingContentData);

                if (!empty($trainingContentData['image'])) {
                    $trainingContent->clearMediaCollection('training_img');
                    $trainingContent->addMedia($trainingContentData['image'])->toMediaCollection('training_img');
                }

            } else {
                throw new \Exception("TrainingContent Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function trainingContentIndexView(
    ) {
        return 'admin.pages.training-contents.index';
    }

    public
        function trainingContentCreateView(
    ) {

        return 'admin.pages.training-contents.create';
    }

    public
        function trainingContentEditView(
    ) {

        return 'admin.pages.training-contents.edit';
    }

    public
        function trainingContentReturnRoute(
    ) {
        return 'admin.trainingContents.index';
    }

    public function getTrainingContent($trainingContentId)
    {
        return $this->trainingContentModel->with('media')->find($trainingContentId);
    }
}
