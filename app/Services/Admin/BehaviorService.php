<?php

namespace App\Services\Admin;

use App\Models\Behavior;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BehaviorService
{
    private static $instance;
    private $behaviorModel;
    private function __construct()
    {
        $this->behaviorModel = new Behavior();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new BehaviorService();
        }
        return self::$instance;
    }


    public function getAllbehaviors($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->behaviorModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->behaviorModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function datatable()
    {
        $behaviors = $this->getAllbehaviors();
        return DataTables::of($behaviors)
            ->addColumn('created_by', function ($data) {
                return $data->user ? $data->user->name : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.behavior.edit', ['behavior' => $data->id]);
                $deleteRoute = route('admin.behavior.destroy', ['behavior' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson();
    }


    public
        function deleteBehavior(
        $behavior
    ) {
        try {
            $behavior->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createBehavior($behaviorData)
    {
        try {
            DB::beginTransaction();

            $behavior = $this->behaviorModel->create($behaviorData);
            $behavior->addMedia($behaviorData['image'])->toMediaCollection('behavior_img');
            DB::commit();
            return $behavior;
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateBehavior($behavior, $behaviorData)
    {

        try {
            if ($behavior) {

                $behavior->update($behaviorData);

                if (!empty($behaviorData['image'])) {
                    $behavior->clearMediaCollection('behavior_img');
                    $behavior->addMedia($behaviorData['image'])->toMediaCollection('behavior_img');
                }

            } else {
                throw new \Exception("Behavior Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function behaviorIndexView(
    ) {
        return 'admin.pages.behaviors.index';
    }

    public
        function behaviorCreateView(
    ) {

        return 'admin.pages.behaviors.create';
    }

    public
        function behaviorEditView(
    ) {

        return 'admin.pages.behaviors.edit';
    }

    public
        function behaviorReturnRoute(
    ) {
        return 'admin.behaviors.index';
    }

    public function getBehavior($behaviorId)
    {
        return $this->behaviorModel->with('media')->find($behaviorId);
    }
}
