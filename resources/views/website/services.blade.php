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
                                    <h1 class="animate">Services</h1>
                                    <small class="intro animate">We full fill your dream come true</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/bannr_servcs.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>

<!-- Page Content services -->
<section class="">
    <div class="container pt-5 mt-5">
        <div class="col-lg-12">
            <div class="text-center cmmn_ttle">
                <h1 class="mt-5 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">What We Offer</h1>
                <small class=" anime" data-wow-duration="0.9s" data-wow-delay="0.2s">Vitae natoque dictum etiam semper magnis</small>
            </div>
        </div>

        <!-- Page Features -->
        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/computer.svg" width="70px">
                        <h4 class="card-title">Network Design</h4>
                        <p class="card-text">Which network vendor are you looking for ? Cisco? Juniper? Cumulus? The choice is yours. You pick. We will help you to build your Network Design that really works.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Networkdesign" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.6s" data-wow-delay="0.2s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/cloud.svg" width="70px">
                        <h4 class="card-title">Cloud Services</h4>
                        <p class="card-text">We have certified professionals to deliver you the best out of AWS/ Azure. We can deliver high performance Cloud Computing for all your Infrastructure needs.</p>
                    </div>
                    <div class="card-footer">
                        <a href="CloudServices" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/server.svg" width="70px">
                        <h4 class="card-title">SDWAN</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque. adipisicing elit. Sapiente esse necessitatibus neque lrem ipsum.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Sdwan" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/shield.svg" width="70px">
                        <h4 class="card-title">Cyber Security</h4>
                        <p class="card-text">We take security way more serious than anything. Anything and everything for your safety.</p>
                    </div>
                    <div class="card-footer">
                        <a href="CyberSecurity" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.9s" data-wow-delay="0.3s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/programmer.svg" width="70px">
                        <h4 class="card-title">Automation</h4>
                        <p class="card-text">Which would you choose? A complete automated platform or a custom-based one just for you? We have it all.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Automation" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/recyclingbin.svg" width="70px">
                        <h4 class="card-title">IT Equipment Recycling</h4>
                        <p class="card-text">Get it clean before you begin. The equipment will be brought to scratch to start with prior all the recycling/liquidation.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Recycling" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="Servcard text-center">
                    <div class="card-body">
                        <img src="/images/services/whitebox.svg" width="70px">
                        <h4 class="card-title">White Box Internet/Generic Enterprise Network</h4>
                        <p class="card-text">Whitebox internet, the future of networking, is safe in our hands. PSTN master in making internet designs and solutions suitable according to every client requirement. </p>
                    </div>
                    <div class="card-footer">
                        <a href="Whitebox" class="btn btn-primary btn_cstm">See More</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section> <!-- services -->
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
