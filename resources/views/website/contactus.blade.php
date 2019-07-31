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
    <form>
        <div class="form-row ContactUs">
            <div class="col-lg-7 col-md-7 collft">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">First Name</label>
                        <input type="text" class="form-control" id="validationServer05" required>
                        <div class="invalid-feedback">
                            Please provide a name.
                        </div>
                    </div> <!-- end of input -->
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">Last Name</label>
                        <input type="text" class="form-control" id="validationServer05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div> <!-- end of input -->
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">Email</label>
                        <input type="text" class="form-control" id="validationServer05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div> <!-- end of input -->
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">Phone Number</label>
                        <input type="text" class="form-control" id="validationServer05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div> <!-- end of input -->
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">City</label>
                        <input type="text" class="form-control" id="validationServer05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div> <!-- end of input -->
                    <div class="col-md-6 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">Country</label>
                        <input type="text" class="form-control" id="validationServer05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div> <!-- end of input -->
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <!-- begin input -->
                        <label for="validationServer05">Your Valid queries</label>
                        <textarea class="form-control" style="height:120px" ;></textarea>
                    </div> <!-- end of input -->
                </div>
                <div class="col-md-6"><button class="btn btn-primary btn_cstm mt-3" type="submit">Submit</button></div>
            </div>
            <div class="col-lg-5 col-md-5 colrgt">
                <span class="Contt">Contact</span>
                <div class="col-lg-12">
                    <div class="contctAddr">
                        <p>DevNation<br> San Fransisco,<br> USA 725214</p>
                        <p>+54 911 3593 9333</p>
                        <p>agalante@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
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

    });

</script>
@stop
