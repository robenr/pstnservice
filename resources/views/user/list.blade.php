@extends('layouts.default')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Users</h4>
            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <div class="quick-links ml-auto">
                    <a href="{{url('portal/users/create')}}" class="btn btn-primary btn-fw"><i class="mdi mdi-plus"></i> Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th width="40%">Name</th>
                            <th width="30%">Email</th>
                            <th width="5%">Type</th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $user['name'] }}</td>
                            <td>
                                {{ $user['email'] }}
                                @if ($user['email_verified_at'] != '')<i class="mdi mdi-account-check icon-sm text-primary"></i>@endif
                            </td>
                            <td>
                                <label class="badge {{ $user['user_type'] == 'A' ? 'badge-danger' : 'badge-info' }}">{{ $user['user_type'] == 'A' ? 'Admin' : 'User' }}</label>
                            </td>
                            <td><a href="{{ url('portal/users/delete/'.$user['id']) }}" onclick="return confirm('Do you want to delete?')"><i class="mdi mdi-delete"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
