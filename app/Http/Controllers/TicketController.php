<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client(['base_uri' => 'https://api.trello.com/1/']);
        $urls = "boards/CZyBrFfl/cards/?";
        $urls .= "limit=10";
        $urls .= "&fields=all";
        $urls .= "&members=false";
        $urls .= "&member_fields=all";
        $urls .= "&key=43e9dc428190840191b5c3d27174f7ea";
        $urls .= "&token=ae20168a9b0c44e451eafe152b69d4476cf604b6cdaf800be5d3cc5b9ecfa44d";
        $response = $client->request('GET', $urls);
        $body = $response->getBody();
        $content =$body->getContents();
        $tickets = json_decode($content,TRUE);

        //dd($tickets);exit;
        return view('ticket.index', ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = \Trello::manager()->getCard();
        $card
            ->setBoardId('CZyBrFfl')
            ->setListId('5d2d7f9e00b1716510b6fbd7')
            ->setName($request->title)
            ->setDescription($request->description)
            ->save();

        return redirect('portal/ticket');
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
}
