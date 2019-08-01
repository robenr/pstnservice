<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{

	public function __construct()
    {
    }

    public function index()
    {
        $this->middleware('auth');
        return view('blog.index', ['blogs' => Blog::all()]);
    }

    public function create()
    {
        $this->middleware('auth');
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $this->middleware('auth');
        $path = $request->file->store('blog');
        $featured_image = $this->saveImage($path);
        $store = array_merge($request->all(), ['featured_image' => $featured_image]);
        $blog = Blog::create($store);
        return redirect('portal/blog');
    }

    public function update(Request $request, Blog $blog)
    {
        $this->middleware('auth');
        $store = $request->all();
        if($request->hasFile('file')) {
            $path = $request->file->store('blog');
            $featured_image = $this->saveImage($path);
            $store = array_merge($store, ['featured_image' => $featured_image]);
        }
        $blog->update($store);
        return redirect('portal/blog');
    }

    public function show(Blog $blog)
    {
        $this->middleware('auth');
        return view('blog.edit', ['blog' => $blog]);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('portal/blog');
    }

    public function home()
    {
        return view('website.blog', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(9)]);
    }

    public function inner(Blog $blog)
    {
        return view('website.bloginner', ['blog' => $blog]);
    }

    private function saveImage($path) {
        $path = 'app/'. $path;
        $image = storage_path($path);
        $filename = basename($path);

        $img = Image::make(file_get_contents($image));
        $img->resize(729, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(public_path('images/blogs/'. $filename));

        $img = Image::make(file_get_contents($image));
        $img->resize(null, 346, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->crop(369, 346);
        $img->save(public_path('images/blogs/thumbnail/'. $filename));
        return $img->basename;
    }
}
