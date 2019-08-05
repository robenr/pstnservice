<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('website.home', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function aboutus()
    {
        return view('website.aboutus', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function services()
    {
        return view('website.services', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function contactus()
    {
        return view('website.contactus');
    }

    public function Automation()
    {
        return view('website.Automation', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function CloudServices()
    {
        return view('website.CloudServices', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function CyberSecurity()
    {
        return view('website.CyberSecurity', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function networkdesign()
    {
        return view('website.networkdesign', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function recycling()
    {
        return view('website.recycling', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function sdwan()
    {
        return view('website.sdwan', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }

    public function whitebox()
    {
        return view('website.whitebox', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(3)]);
    }
}
