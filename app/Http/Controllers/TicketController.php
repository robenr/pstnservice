<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Ticket;
use App\Http\Requests\StoreTicketRequest;

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

    public function store(StoreTicketRequest $request)
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

    public function show(Ticket $ticket)
    {
        $this->middleware('auth');

        $client = new Client(['base_uri' => 'https://api.trello.com/1/']);
        $urls = "cards/".$ticket['trello_id']."?";
        $urls .= "attachments=false";
        $urls .= "&attachment_fields=all";
        $urls .= "&members=false";
        $urls .= "&membersVoted=false";
        $urls .= "&checkItemStates=false";
        $urls .= "&checklists=none";
        $urls .= "&checklist_fields=all";
        $urls .= "&board=false";
        $urls .= "&list=false";
        $urls .= "&pluginData=false";
        $urls .= "&stickers=false";
        $urls .= "&sticker_fields=all";
        $urls .= "&customFieldItems=false";

        $urls .= "&key=43e9dc428190840191b5c3d27174f7ea";
        $urls .= "&token=ae20168a9b0c44e451eafe152b69d4476cf604b6cdaf800be5d3cc5b9ecfa44d";
        $response = $client->request('GET', $urls);
        $body = $response->getBody();
        $content =$body->getContents();
        $ticket = json_decode($content,TRUE);
        //dd($ticket);exit;
        return view('ticket.edit', ['ticket' => $ticket]);
    }

    public function edit(StoreTicketRequest $request, Ticket $ticket)
    {
        $store = $request->all();
        $card = \Trello::manager()->getCard($ticket['trello_id']);
        $card
            ->setName($store['title'])
            ->setDescription($store['description'])
            ->save();
        $data = array( "created_by" => $request->user()->id, "trello_id" => $card->getId(), "name" => $store['title'], "trello_url" => $ticket['trello_url'] );
        $ticket->update($data);
        return redirect('portal/ticket');
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
