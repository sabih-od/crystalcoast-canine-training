<?php

namespace App\Services\Admin;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BlogService
{
    private static $instance;
    private $blogModel;
    private function __construct()
    {
        $this->blogModel = new Blog();
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new BlogService();
        }
        return self::$instance;
    }


    public function getAllblogs($limit = null)
    {
        try {
            if ($limit != null) {
                return $this->blogModel->orderBy('created_at', 'desc')->limit($limit)->get();
            }
            return $this->blogModel->orderBy('created_at', 'desc')->get();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function datatable()
    {
        $blogs = $this->getAllblogs();
        return DataTables::of($blogs)
            ->addColumn('created_by', function ($data) {
                return $data->user ? $data->user->name : " ";
            })
            ->addColumn('action', function ($data) {
                $editRoute = route('admin.blog.edit', ['blog' => $data->id]);
                $deleteRoute = route('admin.blog.destroy', ['blog' => $data->id]);

                return '<a title="Edit" href="' . $editRoute . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>&nbsp;'
                    . '<button title="Delete" type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm" data-delete="' . $deleteRoute . '" onclick="confirmDelete(' . $data->id . ')"><i class="fa fa-trash"></i></button>';
            })
            ->rawColumns(['action'])
            ->toJson(); //--- Returning Json Data To Client Side
    }


    public
        function deleteBlog(
        $blog
    ) {
        try {
            $blog->delete();
            return true;

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function createBlog($blogData)
    {
        try {
            DB::beginTransaction();
            $blogData['is_feature'] = isset($blogData['is_feature']) && $blogData['is_feature'] ? 1 : 0;
            $blog = $this->blogModel->create($blogData);
            $blog->addMedia($blogData['photo'])->toMediaCollection('blog_img');
            DB::commit();
            return $blog;
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }


    public function updateBlog($blog, $blogData)
    {

        try {
            if ($blog) {
                $blogData['is_feature'] = isset($blogData['is_feature']) && $blogData['is_feature'] ? 1 : 0;
                $blog->update($blogData);

                if (!empty($blogData['photo'])) {
                    $blog->clearMediaCollection('blog_img');
                    $blog->addMedia($blogData['photo'])->toMediaCollection('blog_img');
                }

            } else {
                throw new \Exception("Blog Not Found");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public
        function blogIndexView(
    ) {
        return 'admin.pages.blogs.index';
    }

    public
        function blogCreateView(
    ) {

        return 'admin.pages.blogs.create';
    }

    public
        function blogEditView(
    ) {

        return 'admin.pages.blogs.edit';
    }

    public
        function blogReturnRoute(
    ) {
        return 'admin.blogs.index';
    }

    public function getBlog($blogId)
    {
        return $this->blogModel->with('media')->find($blogId);
    }
}
