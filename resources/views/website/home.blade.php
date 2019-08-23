@extends('layouts.site')

@section('title', 'PSTN Services Inc')

@section('content')
<div class="">
    <!-- Owl carosl html section -->
    <div class="owl-carousel owl-theme" id="owlcarHome">
        <div class="item">
            <div class="InnrBannerSet">
                <div class="container">
                    <div class="row">
                        <div class="sldrContent">
                            <div class="container">
                                <div class="col-md-12 ContnSect">
                                    <h1 class="animate">Looking for Networking Services?</h1>
                                    <p class="intro animate">If you are looking for networking services, we are the solution. Because, PSTN provides you every network related solutions you are looking for. We, undeniably, are the best.</p>
                                    <a href="{{url('services')}}" class="btn btn-primary btn-large btn-sliderGhost">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/banner2.jpg" class="imGbannrBG" />
            </div>
        </div>
        <div class="item">
            <div class="InnrBannerSet">
                <div class="container">
                    <div class="row">
                        <div class="sldrContent">
                            <div class="container">
                                <div class="col-md-12 ContnSect">
                                    <h1 class="animate">We Design and Upgrade your Infrastructure.</h1>
                                    <p class="intro animate">Does your firm hold a lot of IT which you would like to liquidate? Or recycle? PSTN Services make your entire process of IT equipment recycling or liquidation simple and easy for you.</p>
                                    <a href="{{url('Recycling')}}" class="btn btn-primary btn-large btn-sliderGhost">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/banner1.jpg" class="imGbannrBG" />
            </div>
        </div>

        <div class="item">
            <div class="InnrBannerSet">
                <div class="container">
                    <div class="row">
                        <div class="sldrContent">
                            <div class="container">
                                <div class="col-md-12 ContnSect">
                                    <h1 class="animate">Worrying about Cyber Security?</h1>
                                    <p class="intro animate">Does your firm is under cyber attack? We work with the most advanced cyber security infrastructures like Fortinet, PalaAlto, Cisco Security and Qadium.</p>
                                    <a href="{{url('CyberSecurity')}}" class="btn btn-primary btn-large btn-sliderGhost">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/banner_cyber.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>


<!-- Page Content -->
<div class="container pt-4">

    <div class="col-lg-12">
        <div class="text-center cmmn_ttle">
            <h1 class="mt-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">What We Offer</h1>
            <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Looking for Networking Services? You are at right place.</small>
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
                    <p class="card-text">Using SD-WAN in your network improves your bandwidth, optimize traffic and it improve network performance better than before.</p>
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

<!-- blog container -->
<div class="container pt-4">

    <div class="text-center cmmn_ttle">
        <h1 class="anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Blog</h1>
        <small class="intro anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Learn, Discover and share the power of information</small>
    </div>

    <div class="row wow fadeInUp">
        
        @foreach($blogs as $key => $blog)
        <div class="col-lg-4 col-md-6 mb-4 blogDsgn">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/blogs/thumbnail/'.$blog['featured_image']) }}" alt="">
                <div class="card-body">
                    <small>{{ date('d/m/Y', strtotime($blog['created_at'])) }}</small>
                    <h4 class="card-title">{{ $blog['blog_title'] }}</h4>
                    <a href="{{ url('blog/'.$blog['id']) }}" class="btn btn-primary see_ghst">See More</a>
                </div>
            </div>
        </div>
        @endforeach       

    </div>
    <center class="pt-5 pb-5 anime" data-wow-duration="0.7s" data-wow-delay="0.2s"><a href="blog" class="btn btn-primary btn_cstm">Check More <i class="icomoon icon-arrow-right1"></i></a></center>
</div><!-- blog end -->


<!-- Testimonials Section
    ================================================== -->
<section id="testimonials" class="paddng_sectn">

    <div class="text-center cmmn_ttle">
        <h1 class="mt-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Success Stories</h1>
        <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Our Customers Love What We Do</small>
    </div>

    <div class="row">
        <div class="container pb-5">


            <div class="carslClint owl-carousel owl-theme anime" id="ClntTestimonials" data-wow-duration="0.9s" data-wow-delay="0.2s">
                <div class="col-sm-12">
                    <div class="testimonial-author">
                        <img src="/images/avatars/user-04.jpg" alt="Author image">
                        <div class="author-info">
                            Sohail Zafar
                            <span class="position">President, NGTech LLC</span>
                        </div>
                    </div>
                    <p>
                       "Amazing customer service skills. This company takes the time to know what the issue is and help see the problem through to its resolution. They have amazing customer service skills and are wonderful to talk to during what is usually a stressful, technology non-functioning, time. We highly recommend pstn services."
                    </p>

                </div>

                <div class="col-sm-12">
                    <div class="testimonial-author">
                        <img src="/images/avatars/nithin.jpg" alt="Author image">
                        <div class="author-info">
                            Nithin P John
                            <span class="position">CIO, Evalogical</span>
                        </div>
                    </div>
                    <p>
                        "Fantastic support of our mission critical ops. Your entire team is awesome! Being a network consulting firm, we REALLY appreciate your fantastic support of our mission critical ops -- keeping our client data secure and our network running smoothly! Thank you PSTN Services for helping with my tech problems!"
                    </p>

                </div>


                <div class="col-sm-12">
                    <div class="testimonial-author">
                        <img src="/images/avatars/haleel.jpg" alt="Author image">
                        <div class="author-info">
                            Haleel Abdul Hameed
                            <span class="position">COO, Evalogical</span>
                        </div>
                    </div>
                    <p>
                        "We finally found a company that is a team and that works with us toward the same goals. We ultimately decided to work with PSTN Services because they had a lot of good people we could work with, we had built a solid relationship, and their treatment of us from the beginning met or exceeded our expectations."
                    </p>
                </div>

            </div> <!-- slider end -->
        </div>

    </div> <!-- end flex-container -->

</section> <!-- end testimonials -->
@stop

@section('scripts')
<script>
$(document).ready(function() {

    jQuery('#owlcarHome').owlCarousel({
        items: 1,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        smartSpeed: 450
    });

    jQuery('#ClntTestimonials').owlCarousel({
        items: 1,
        smartSpeed: 450,
        responsiveClass: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            768: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    });
});
</script>
@stop
