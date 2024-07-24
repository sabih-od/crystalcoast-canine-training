<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Models\GraduateGallery;
use App\Services\Admin\GraduateService;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $graduateService;


    public function __construct(
        GraduateService $graduateService
    ) {
        $this->graduateService = $graduateService;
    }



    public function index(Request $request)
    {
        $faq = $this->graduateService->getAllGraduates();

        if ($faq instanceof \Exception) {
            return WebResponses::errorRedirectBack($faq->getMessage());
        }

        if ($request->ajax()) {
            return $this->graduateService->datatable();
        }

        return view($this->graduateService->graduateIndexView(), compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->graduateService->graduateCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $create = $this->graduateService->createGraduate($request);
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->graduateService->graduateReturnRoute())
            ->with('success', 'Graduate Gallery Image Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GraduateGallery $graduate)
    {
        try {
            return view(
                $this->graduateService->graduateEditView(),
                compact('graduate')
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
    public function update(Request $request, GraduateGallery $graduate)
    {
        $graduate = $this->graduateService->updateGraduate($graduate, $request);

        if ($graduate instanceof \Exception) {
            return WebResponses::errorRedirectBack($graduate->getMessage());
        }

        return redirect()->route($this->graduateService->graduateReturnRoute())
            ->with('success', 'Graduate Gallery Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraduateGallery $graduate)
    {
        $graduate = $this->graduateService->deleteGraduate($graduate);

        if ($graduate instanceof \Exception) {
            return APIResponse::exception($graduate->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
