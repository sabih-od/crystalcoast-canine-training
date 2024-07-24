<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Services\Admin\FaqService;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $faqService;


    public function __construct(
        FaqService $faqService
    ) {
        $this->faqService = $faqService;
    }



    public function index(Request $request)
    {
        $faq = $this->faqService->getAllFaqs();

        if ($faq instanceof \Exception) {
            return WebResponses::errorRedirectBack($faq->getMessage());
        }

        if ($request->ajax()) {
            return $this->faqService->datatable();
        }

        return view($this->faqService->faqIndexView(), compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->faqService->faqCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        $create = $this->faqService->createFaq($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->faqService->faqReturnRoute())
            ->with('success', 'Faq Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        try {
            return view(
                $this->faqService->faqEditView(),
                compact('faq')
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
    public function update(Request $request, Faq $faq)
    {
        $faq = $this->faqService->updateFaq($faq, $request->all());

        if ($faq instanceof \Exception) {
            return WebResponses::errorRedirectBack($faq->getMessage());
        }

        return redirect()->route($this->faqService->faqReturnRoute())
            ->with('success', 'Faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq = $this->faqService->deleteFaq($faq);

        if ($faq instanceof \Exception) {
            return APIResponse::exception($faq->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
