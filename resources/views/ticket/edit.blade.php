@extends('layouts.default')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">{{ $ticket['name'] }}</h4>
        </div>
    </div>
    <div class="col-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update ticket</h4>
                <form class="form-sample" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control"  value="{{ $ticket['name'] }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" class="form-control">{{ $ticket['desc'] }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-fw">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Header Ends-->
@stop