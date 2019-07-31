@extends('layouts.site')

@section('title', 'About Us')

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
                                    <h1 class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">About Us</h1>
                                    <small class="intro anime" data-wow-duration="1s" data-wow-delay="0.2s">We full fill your dream come true</small>
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

<div class="container py-5">
    <!-- /.row -->

    <!-- START THE FEATURETTES -->
    <div class="row featurette pt-5 pb-5 flex_center">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <p class="para001"><span class="text_lrge primary_color">PSTN</span> Services is a minority-owned forward looking small business, born in 2003. We are focused on providing expert solutions for cutting-edge technologies that are needed for 21st century businesses. Our services encompass information technology services, cyber security solutions, large scale data center design, application and infrastructure transformation, information assurance, global backbone design, cloud management and consulting.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto" src="/images/about/a1.jpg">
        </div>
    </div>



    <div class="row featurette pt-5 pb-5 flex_center">
        <div class="col-md-6 order-md-2 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <h2 class="featurette_hd">Why work with<br><span class="Ftext_bg">PSTN Services?</span></h2>
            <p class="para001">PSTN Services partners with our customers to understand their unique business requirement and deliver digital transformation through organizational agility and on-demand service models. This client-centric approach and leading technology innovation, has enabled us to provide most advanced custom solutions at most competitive price.</p>
            <p class="para001">At PSTN Services, we promote continuous monitoring of mission critical infrastructure and deployment through automation, which eliminates human error and reduces outage resolution period.</p>
        </div>
        <div class="col-md-6 order-md-1 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="/images/about/a2.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
    </div>

    <!--  <hr class="featurette-divider"> -->

    <div class="row featurette pt-5 pb-5 flex_center">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <h2 class="featurette_hd">Our<br><span class="Ftext_bg">Team</span></h2>
            <p class="para001">Our team of architects and engineers have industry experience in managing billion dollars projects and leading virtual teams across the globe. Our leadership team combines their technical experience with in depth knowledge of global marketplace and clear vision of the future. They thrive to be customer-focused technology leaders that consistently delivers optimal and cost-effective business solution.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="/images/about/a3.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
    </div>

    <!-- /END THE FEATURETTES -->

</div> <!-- end of 2 section container -->

<!-- Page Content services -->
<section class="grey">
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

        </div>
        <!-- /.row -->
        <center class="pt-5 pb-5 anime" data-wow-duration="0.7s" data-wow-delay="0.2s"><a href="services" class="btn btn-primary btn_cstm">Check More <i class="icomoon icon-arrow-right1"></i></a></center>

    </div>
    <!-- /.container -->
</section> <!-- services -->

<!-- tech partner -->
<section class="techPartnr">
    <div class="container pt-5 pb-5 mb-5">
        <div class="col-lg-12">
            <div class="text-center cmmn_ttle">
                <h1 class="mt-5 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">TECHNOLOGY PARTNERS</h1>
            </div>
        </div>
        <div class="col-lg-12 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <ul class="tec_items">
                <li><img src="/images/techpartners/1.jpg"></li>
                <li><img src="/images/techpartners/2.jpg"></li>
                <li><img src="/images/techpartners/3.jpg"></li>
                <li><img src="/images/techpartners/4.jpg"></li>
                <li><img src="/images/techpartners/5.jpg"></li>
                <hr>
                <li><img src="/images/techpartners/6.jpg"></li>
                <li><img src="/images/techpartners/7.jpg"></li>
                <li><img src="/images/techpartners/8.jpg"></li>
                <li><img src="/images/techpartners/9.jpg"></li>
                <li><img src="/images/techpartners/10.jpg"></li>
            </ul>
        </div>
    </div>
</section><!-- tech partner end -->

<!-- blog container -->
<div class="container pt-4">

    <div class="text-center cmmn_ttle">
        <h1 class="mt-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Blog</h1>
        <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Vitae natoque dictum etiam semper magnis</small>
    </div>

    <div class="row wow fadeInUp">

        <div class="col-lg-4 col-md-6 mb-4 blogDsgn anime" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <div class="card">
                <img class="card-img-top" src="/images/blg1.jpg" alt="">
                <div class="card-body">
                    <small>12/05/2019</small>
                    <h4 class="card-title">Lorem ipsum dolor sit..</h4>
                    <a href="#" class="btn btn-primary see_ghst">See More</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 blogDsgn anime" data-wow-duration="0.6s" data-wow-delay="0.2s">
            <div class="card">
                <img class="card-img-top" src="/images/blg2.jpg" alt="">
                <div class="card-body">
                    <small>12/05/2019</small>
                    <h4 class="card-title">Lorem ipsum dolor sit..</h4>
                    <a href="#" class="btn btn-primary see_ghst">See More</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 blogDsgn anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <div class="card">
                <img class="card-img-top" src="/images/blg3.jpg" alt="">
                <div class="card-body">
                    <small>12/05/2019</small>
                    <h4 class="card-title">Lorem ipsum dolor sit..</h4>
                    <a href="#" class="btn btn-primary see_ghst">See More</a>
                </div>
            </div>
        </div>

    </div>
    <center class="pt-5 pb-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s"><a href="blog" class="btn btn-primary btn_cstm">Check More <i class="icomoon icon-arrow-right1"></i></a></center>
</div><!-- blog end -->
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
