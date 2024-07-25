<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\APIResponse;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Services\Admin\BlogService;
use Illuminate\Http\Request;
use App\Helpers\WebResponses;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $blogService;


    public function __construct(
        BlogService $blogService
    ) {
        $this->blogService = $blogService;
    }



    public function index(Request $request)
    {
        $blog = $this->blogService->getAllblogs();

        if ($blog instanceof \Exception) {
            return WebResponses::errorRedirectBack($blog->getMessage());
        }

        if ($request->ajax()) {
            return $this->blogService->datatable();
        }

        return view($this->blogService->blogIndexView(), compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->blogService->blogCreateView());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $create = $this->blogService->createBlog($request->all());
        if ($create instanceof \Exception) {
            return \redirect()->back()->with('error', $create->getMessage());
        }

        return redirect()->route($this->blogService->blogReturnRoute())
            ->with('success', 'Blog Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        try {
            return view(
                $this->blogService->blogEditView(),
                compact('blog', )
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
    public function update(Request $request, Blog $blog)
    {
        $blog = $this->blogService->updateBlog($blog, $request->all());

        if ($blog instanceof \Exception) {
            return WebResponses::errorRedirectBack($blog->getMessage());
        }

        return redirect()->route($this->blogService->blogReturnRoute())
            ->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog = $this->blogService->deleteBlog($blog);

        if ($blog instanceof \Exception) {
            return APIResponse::exception($blog->getMessage());
        }

        return APIResponse::success("", [], 200);
    }
}
