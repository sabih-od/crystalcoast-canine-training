<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\BehaviorRequest;
use App\Models\Blog;
use App\Services\Admin\BlogService;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\BlogRequest;
use App\Models\Behavior;
use App\Services\Admin\BehaviorService;

class BehaviorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $behaviorService;


    public function __construct(
        BehaviorService $behaviorService
    ) {
        $this->behaviorService = $behaviorService;
    }



    public function index(Request $request)
    {
        $blog = $this->behaviorService->getAllbehaviors();

        if ($blog instanceof \Exception) {
            return WebResponses::errorRedirectBack($blog->getMessage());
        }

        if ($request->ajax()) {
            return $this->behaviorService->datatable();
        }

        return view($this->behaviorService->behaviorIndexView(), compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->behaviorService->behaviorCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BehaviorRequest $request)
    {
        $create = $this->behaviorService->createBehavior($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->behaviorService->behaviorReturnRoute())
            ->with('success', 'Blog Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Behavior $behavior)
    {
        try {
            return view(
                $this->behaviorService->behaviorEditView(),
                compact('behavior', )
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
    public function update(Request $request, Behavior $behavior)
    {
        $behavior = $this->behaviorService->updateBehavior($behavior, $request->all());

        if ($behavior instanceof \Exception) {
            return WebResponses::errorRedirectBack($behavior->getMessage());
        }

        return redirect()->route($this->behaviorService->behaviorReturnRoute())
            ->with('success', 'Behavior updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Behavior $behavior)
    {
        $behavior = $this->behaviorService->deleteBehavior($behavior);

        if ($behavior instanceof \Exception) {
            return APIResponse::exception($behavior->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
