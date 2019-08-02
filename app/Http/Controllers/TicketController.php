<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Ticket;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        /*$client = new Client(['base_uri' => 'https://api.trello.com/1/']);
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
        $tickets = json_decode($content,TRUE);*/

        if($request->user()->user_type == 'U') {
            $tickets = Ticket::where([
                                        ['created_by', '=', $request->user()->id]
                                    ])->get();
        } else {
            $tickets = Ticket::all();
        }

        //dd($tickets);exit;
        return view('ticket.index', ['tickets' => $tickets]);
    }

    public function create()
    {
        return view('ticket.create', []);
    }

    public function store(Request $request)
    {
        $card = \Trello::manager()->getCard();
        $card
            ->setBoardId('CZyBrFfl')
            ->setListId('5d2d7f9e00b1716510b6fbd7')
            ->setName($request->title)
            ->setDescription($request->description)
            ->save();

        $data = array( "created_by" => $request->user()->id, "trello_id" => $card->getId() );
        $ticket = Ticket::create($data);

        return redirect('portal/ticket');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
