<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactUsRequest;
use App\Blog;
use App\Country;
use App\State;
use App\Mail\ContactUs;

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
        return view('website.contactus', ['countries' => Country::orderBy('name', 'asc')->get(), 'states' => State::orderBy('name', 'asc')->get()]);
    }

    public function submitcontactus(ContactUsRequest $request)
    {
        $user = $request->all();
        Mail::from($user->email)->to("mr.roben@gmail.com")->send(new ContactUs($user));
        return redirect('contactus');
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
