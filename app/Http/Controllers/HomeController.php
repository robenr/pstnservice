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
        return view('website.home', ['blogs' => Blog::orderBy('updated_at', 'desc')->paginate(9)]);
    }

    public function aboutus()
    {
        return view('website.aboutus');
    }

    public function services()
    {
        return view('website.services');
    }

    public function contactus()
    {
        return view('website.contactus');
    }

    public function Automation()
    {
        return view('website.Automation');
    }

    public function CloudServices()
    {
        return view('website.CloudServices');
    }

    public function CyberSecurity()
    {
        return view('website.CyberSecurity');
    }

    public function networkdesign()
    {
        return view('website.networkdesign');
    }

    public function recycling()
    {
        return view('website.recycling');
    }

    public function sdwan()
    {
        return view('website.sdwan');
    }

    public function whitebox()
    {
        return view('website.whitebox');
    }
}
