@extends('layouts.site')

@section('title', 'Services')

@section('content')
<div class="">
    <!-- Owl carosl html section -->
    <div class="owl-carousel owl-theme" id="owlcarHome">
        <div class="item">
            <div class="InnrBannerSet">
                <div class="container">
                    <div class="row">
                        <div class="sldrContent bannrCntnt">
                            <div class="container">
                                <div class="col-md-12 ContnSect">
                                    <h1 class="animate">Contact Us</h1>
                                    <small class="intro animate">Any Questions? We are here to help!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/banner1.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>

<!-- Page Content -->
<div class="container pt-5 mt-5">

    <!-- Page Features -->
    <form method="post" action="">
        <div class="form-row ContactUs">
            <div class="col-lg-7 col-md-7 collft">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name')}}">
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{old('last_name')}}">
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="city">City</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{old('city')}}">
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="country">Country</label>
                        <select class="form-control @error('country') is-invalid @enderror" name="country" id="countries" onchange="toggleStates(this.value)">
                            <option value="">Select a country</option>
                            @foreach ($countries as $key => $country)
                            <option value="{{ $country['name'] }}" {{ old('country') == $country['name'] ? 'selected="selected"' : '' }}>{{ $country['name'] }}</option>
                            @endforeach
                        </select>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="state">State</label>
                        <input type="text" class="form-control @error('state') is-invalid @enderror" name="state" id="otherstates" value="{{old('state')}}" @if(old('country') =='United States') disabled="disabled" style="display: none" @endif>
                        <select class="form-control @error('state') is-invalid @enderror" id="usstates" name="state" @if(old('country') !='United States') disabled="disabled" style="display: none" @endif>
                            <option value="">Select a state</option>
                            @foreach ($states as $key => $state)
                            <option value="{{ $state['name'] }}" {{ old('state') == $state['name'] ? 'selected="selected"' : '' }}>{{ $state['name'] }}</option>
                            @endforeach
                        </select>
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> <!-- end of input -->
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <!-- begin input -->
                        <label for="query">Your Valid queries</label>
                        <textarea class="form-control" style="height:120px" name="query">{{old('query')}}</textarea>
                    </div> <!-- end of input -->
                </div>
                <div class="col-md-6"><button class="btn btn-primary btn_cstm mt-3" type="submit">Submit</button></div>
            </div>
            <div class="col-lg-5 col-md-5 colrgt">
                <span class="Contt">Contact</span>
                <div class="col-lg-12">
                    <div class="contctAddr">
                        <p>350 fifth ave<br>  New York<br> USA 10018</p>
                        <p>+1 (516) 605-4330</p>
                        <p>info@pstnservices.com</p>
                    </div>
                </div>
            </div>
        </div>
        @csrf
    </form>
    <!-- /.row -->
</div>
<!-- /.container -->
@stop

@section('scripts')
<script>
    $(document).ready(function() {

        jQuery('#owlcarHome').owlCarousel({
            items: 1,
            smartSpeed: 450
        });
        jQuery('#countries option[value="United States"]').insertBefore('#countries option[value="Afghanistan"]');

    });

    function toggleStates(state) {
        if(state == 'United States') {
            jQuery('#otherstates').hide().val('').prop('disabled', true);
            jQuery('#usstates').show().prop('disabled', false);
        } else {
            jQuery('#usstates').hide().val('').prop('disabled', true);
            jQuery('#otherstates').show().val('').prop('disabled', false);
        }
    }

</script>
@stop
