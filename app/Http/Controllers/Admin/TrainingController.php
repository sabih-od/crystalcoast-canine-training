<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\GalleryRequest;
use App\Models\TrainingGallery;
use App\Services\Admin\TrainingService;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $trainingService;


    public function __construct(
        TrainingService $trainingService
    ) {
        $this->trainingService = $trainingService;
    }



    public function index(Request $request)
    {
        $training = $this->trainingService->getAllTrainings();

        if ($training instanceof \Exception) {
            return WebResponses::errorRedirectBack($training->getMessage());
        }

        if ($request->ajax()) {
            return $this->trainingService->datatable();
        }

        return view($this->trainingService->trainingIndexView(), compact('training'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->trainingService->trainingCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $create = $this->trainingService->createTraining($request);
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->trainingService->trainingReturnRoute())
            ->with('success', 'Training Gallery Image Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingGallery $training)
    {
        try {
            return view(
                $this->trainingService->trainingEditView(),
                compact('training')
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
    public function update(Request $request, TrainingGallery $training)
    {
        $training = $this->trainingService->updateTraining($training, $request);

        if ($training instanceof \Exception) {
            return WebResponses::errorRedirectBack($training->getMessage());
        }

        return redirect()->route($this->trainingService->trainingReturnRoute())
            ->with('success', 'Training Gallery Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingGallery $training)
    {
        $training = $this->trainingService->deleteTraining($training);

        if ($training instanceof \Exception) {
            return APIResponse::exception($training->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
