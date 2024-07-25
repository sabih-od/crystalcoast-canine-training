<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingRequest;
use App\Models\Blog;
use App\Services\Admin\BlogService;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\BlogRequest;
use App\Models\Training;
use App\Services\Admin\TrainingContentService;
use App\Services\Admin\TrainingService;

class TrainingContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $trainingService;


    public function __construct(
        TrainingContentService $trainingService
    ) {
        $this->trainingService = $trainingService;
    }



    public function index(Request $request)
    {
        $training = $this->trainingService->getAllTrainingContents();

        if ($training instanceof \Exception) {
            return WebResponses::errorRedirectBack($training->getMessage());
        }

        if ($request->ajax()) {
            return $this->trainingService->datatable();
        }

        return view($this->trainingService->trainingContentIndexView(), compact('training'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->trainingService->trainingContentCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingRequest $request)
    {
        $create = $this->trainingService->createTrainingContent($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->trainingService->trainingContentReturnRoute())
            ->with('success', 'Blog Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        try {
            return view(
                $this->trainingService->trainingContentEditView(),
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
    public function update(Request $request, Training $training)
    {
        $training = $this->trainingService->updateTrainingContent($training, $request->all());

        if ($training instanceof \Exception) {
            return WebResponses::errorRedirectBack($training->getMessage());
        }

        return redirect()->route($this->trainingService->trainingContentReturnRoute())
            ->with('success', 'Training updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        $training = $this->trainingService->deleteTrainingContent($training);

        if ($training instanceof \Exception) {
            return APIResponse::exception($training->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
