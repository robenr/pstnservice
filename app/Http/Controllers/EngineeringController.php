<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEngineeringRequest;
use App\FileManager;

class EngineeringController extends Controller
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
        $files = FileManager::where([
                                        ['location', '=', 'engineering'],
                                        ['uploaded_by', '=', $request->user()->id]
                                    ])->get();
        return view('engineering.index', ['files' => $files]);
    }


    public function all(Request $request)
    {
        $files = FileManager::where('location', 'engineering')->get();
        return view('engineering.index', ['files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEngineeringRequest $request)
    {
        //$path = $request->name->store('engineering');
        $filePath = Storage::putFile('engineering', $request->file('file'));
        $store = array_merge($request->all(), ['mimetype' => $request->file('file')->getMimeType()]);
        $store = array_merge($store, ['filename' => $filePath]);
        $store = array_merge($store, ['location' => 'engineering']);
        $store = array_merge($store, ['uploaded_by' => $request->user()->id]);
        $product = FileManager::create($store);
        if($request->user()->user_type == 'U') {
            return redirect('portal/engineering');
        } else {
            return redirect('portal/engineering/all');
        }
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
        $file = storage_path("app/engineering/".$path);
        $mime_type = mime_content_type($file);
        $headers = array(
            'Content-Type: '.$mime_type,
        );
        $infoPath = pathinfo($file);
        //dd($infoPath);exit;
        return response()->download($file, 'download.'.$infoPath['extension'], $headers);
    }
}
