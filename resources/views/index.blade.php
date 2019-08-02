@extends('layouts.default')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between pb-3">
                    <h4 class="card-title mb-0">TASKS ASSIGNED</h4>
                </div>
                <ul class="timeline">
                    @foreach($tickets as $key => $ticket)
                    <li class="timeline-item">
                        <p class="timeline-content"><a href="{{ $ticket['url'] }}" target="_blank">{{ $ticket['name'] }}</p>
                        <p class="event-time">{{ date('d/m/Y', strtotime($ticket['dateLastActivity'])) }}</p>
                    </li>
                    @endforeach
                </ul>
                <a class="d-block mt-3" href="{{url('portal/ticket')}}">Show all</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">New Billing Files</h4>
                @foreach($billings as $key => $billing)
                <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                        <small class="text-muted">{{ date('d/m/Y', strtotime($billing['updated_at'])) }}</small>
                        <p class="font-weight-semibold text-gray mb-0">{{ $billing['title'] }}</p>
                    </div>
                </div>
                @endforeach
                @if(Auth::user()->user_type == 'A')<a class="d-block mt-5" href="{{url('portal/billing/all')}}">Show all</a>@endIf
                @if(Auth::user()->user_type == 'U')<a class="d-block mt-5" href="{{url('portal/billing')}}">Show all</a>@endIf
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">New Engineering Files</h4>
                @foreach($engineerings as $key => $engineering)
                <div class="d-flex py-2 border-bottom">
                    <div class="wrapper">
                        <small class="text-muted">{{ date('d/m/Y', strtotime($engineering['updated_at'])) }}</small>
                        <p class="font-weight-semibold text-gray mb-0">{{ $engineering['title'] }}</p>
                    </div>
                </div>
                @endforeach
                @if(Auth::user()->user_type == 'A')<a class="d-block mt-5" href="{{url('portal/engineering/all')}}">Show all</a>@endIf
                @if(Auth::user()->user_type == 'U')<a class="d-block mt-5" href="{{url('portal/engineering')}}">Show all</a>@endIf
            </div>
        </div>
    </div>
</div>
@stop
