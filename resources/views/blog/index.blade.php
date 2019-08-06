@extends('layouts.default')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Blogs</h4>
            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <div class="quick-links ml-auto">
                    <a href="{{url('portal/blog/create')}}" class="btn btn-primary btn-fw"><i class="mdi mdi-plus"></i> Create</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th> Title </th>
                            <th width="20%"> Publish date </th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $key => $blog)
                        <tr>
                            <td> <a href="{{ url('portal/blog/edit/'.$blog['id']) }}">{{ $blog['blog_title'] }}</a> </td>
                            <td> {{ date('d-m-Y', strtotime($blog['created_at'])) }} </td>
                            <td><a href="{{ url('portal/blog/delete/'.$blog['id']) }}" onclick="return confirm('Do you want to delete?')"><i class="mdi mdi-delete"></i></a></td>
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
