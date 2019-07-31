<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\FileManager;

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
    public function index()
    {
        $client = new Client(['base_uri' => 'https://api.trello.com/1/']);
        $urls = "boards/CZyBrFfl/cards/?";
        $urls .= "limit=5";
        $urls .= "&fields=all";
        $urls .= "&members=false";
        $urls .= "&member_fields=all";
        $urls .= "&key=43e9dc428190840191b5c3d27174f7ea";
        $urls .= "&token=ae20168a9b0c44e451eafe152b69d4476cf604b6cdaf800be5d3cc5b9ecfa44d";
        $response = $client->request('GET', $urls);
        $body = $response->getBody();
        $content =$body->getContents();
        $tickets = json_decode($content,TRUE);

        $billings = FileManager::where('location', 'billing')->paginate(5);
        $engineerings = FileManager::where('location', 'engineering')->paginate(5);

        return view('index', ['tickets' => $tickets, 'billings' => $billings, 'engineerings' => $engineerings]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
