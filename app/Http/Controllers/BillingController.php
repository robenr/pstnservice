<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreBillingRequest;
use GuzzleHttp\Client;
use App\FileManager;

class BillingController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$client = new Client(['base_uri' => 'https://api.trello.com/1/']);
        $urls = "boards/siGdMJww/cards/?";
        $urls .= "limit=2";
        $urls .= "&fields=name";
        $urls .= "&members=true";
        $urls .= "&member_fields=fullName,avatarUrl";
        $urls .= "&key=43e9dc428190840191b5c3d27174f7ea";
        $urls .= "&token=ae20168a9b0c44e451eafe152b69d4476cf604b6cdaf800be5d3cc5b9ecfa44d";
        $response = $client->request('GET', $urls);
        $body = $response->getBody();
        $content =$body->getContents();
        $arr = json_decode($content,TRUE);

        dd($arr);exit;

        return view('billing.index');*/

        /*$card = \Trello::manager()->getCard();
        $card
            ->setBoardId('siGdMJww')
            ->setListId('5d2731d3167c380d9224ce32')
            ->setName('Roben testing card')
            ->setDescription('testing Description of the card')
            ->save();

        dd($card);exit;*/

        $files = FileManager::where([
                                    ['location', '=', 'billing'],
                                    ['uploaded_by', '=', $request->user()->id]
                                    ])->get();
        return view('billing.index', ['files' => $files]);
    }

    public function all(Request $request)
    {
        $files = FileManager::where('location', 'billing')->get();
        return view('billing.index', ['files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBillingRequest $request)
    {
        $filePath = Storage::putFile('billing', $request->file('file'));
        $store = array_merge($request->all(), ['mimetype' => $request->file('file')->getMimeType()]);
        $store = array_merge($store, ['filename' => $filePath]);
        $store = array_merge($store, ['location' => 'billing']);
        $store = array_merge($store, ['uploaded_by' => $request->user()->id]);
        $product = FileManager::create($store);
        return redirect('portal/billing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($path)
    {
        $file = storage_path("app/billing/".$path);
        $mime_type = mime_content_type($file);
        $headers = array(
            'Content-Type: '.$mime_type,
        );
        $infoPath = pathinfo($file);
        //dd($infoPath);exit;
        return response()->download($file, 'download.'.$infoPath['extension'], $headers);
    }
}
