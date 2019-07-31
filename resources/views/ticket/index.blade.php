@extends('layouts.default')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Tickets</h4>
            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <div class="quick-links ml-auto">
                    <a href="{{url('portal/ticket/create')}}" class="btn btn-primary btn-fw"><i class="mdi mdi-plus"></i> Create</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ticket Detail</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> Title </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $key => $ticket)
                        <tr>
                            <td class="py-1">{{ $ticket['idShort'] }}</td>
                            <td><a href="{{ $ticket['url'] }}" target="_blank">{{ $ticket['name'] }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
@stop
