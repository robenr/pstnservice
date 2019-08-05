<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\FileManager;
use App\Ticket;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class PortalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        Mail::to($request->user()['email'])->send(new WelcomeMail($request->user()));

        if($request->user()->user_type == 'U') {
            $tickets = Ticket::where([
                                        ['created_by', '=', $request->user()->id]
                                    ])->orderby("created_at", "desc")->paginate(5);
        } else {
            $tickets = Ticket::orderby("created_at", "desc")->paginate(5);
        }
        
        $billings = FileManager::where([
                                    ['location', '=', 'billing'],
                                    ['uploaded_by', '=', $request->user()->id]
                                    ])->orderby("created_at", "desc")->paginate(5);
        $engineerings = FileManager::where([
                                    ['location', '=', 'engineering'],
                                    ['uploaded_by', '=', $request->user()->id]
                                    ])->orderby("created_at", "desc")->paginate(5);

        return view('index', ['tickets' => $tickets, 'billings' => $billings, 'engineerings' => $engineerings]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
