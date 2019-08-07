@extends('layouts.default')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Billing</h4>
        </div>
    </div>
    <div class="col-md-7 col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Name</th>
                            @if(Auth::user()->user_type == 'A')<th width="15%">Created By</th>@endIf
                            <th width="20%">Type</th>
                            <th width="20%">Last Modified</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $key => $file)
                        @php ($path = basename($file['filename']))
                        <tr>
                            <td>
                                <i class="fa fa-file-word-o text-primary"></i>
                                <a href="{{url('portal/billing/download/'.$path)}}" class="wraptext">{{ $file['title'] }}</a>
                            </td>
                            @if(Auth::user()->user_type == 'A')<td class="wraptext">{{ $file['uploaded_user']['name'] }}</td>@endIf
                            <td class="wraptext">{{ $file['mimetype'] }}</td>
                            <td class="wraptext">{{ $file['updated_at'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Billing file upload</h4>
                <form class="form-sample" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">File Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" />
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value="I">Invoiced</option>
                                        <option value="P">Paid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">File</label>
                                <div class="col-sm-9">
                                    <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary btn-fw" onclick="showBD();">Upload</button>
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

<div class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="width: 48px">
            <span class="fa fa-spinner fa-spin fa-3x"></span>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
    function showBD() {
        $('.modal').modal('show');
    }

</script>
@stop
