@extends('layouts.site')

@section('title', 'IT Equipment Recycling')

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
                                    <h1 class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">IT Equipment Recycling</h1>
                                    <small class="intro anime" data-wow-duration="1s" data-wow-delay="0.2s">We full fill your dream come true</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/banner_recyle.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>

<div class="container py-5">

    <!-- /.row -->

    <!-- START THE FEATURETTES -->

    <div class="row featurette pt-5 pb-5">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <p class="para001">Let us face the fact. Any or every gadget has a life span. For majority of them, it might be from 3 to 4 years. But it is clearly uneconomical to simply throw them away after that. Now this is the point where IT liquidation comes into importance. IT equipment recycling/liquidation has many benefits starting from gaining space for your further operations to reducing costs associated with space and so on. </p>
            <p class="para001">Does your firm hold a lot of IT which you would like to liquidate? Or recycle? PSTN Services make your entire process of IT equipment recycling or liquidation simple and easy for you. You can call it a hassle free job with our services. We liquidate a wide range of IT gadgets on a daily basis. Our expert team makes your disposal process safe and sound. Make the best out of crap that they are not crap anymore.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto brd_r40" src="/images/itRecycle.jpg">
        </div>
    </div>
    <!-- /END THE FEATURETTES -->

</div> <!-- end of 2 section container -->

<section class="innr_servcs">
    <div class="container">
        <div class="text-center cmmn_ttle">
            <h1 class="mt-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Our Solutions</h1>
            <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Vitae natoque dictum etiam semper magnis</small>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/infrastructre.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Infrastructure upgrades/support</h4>
                        <p class="card-text">If you are really looking for your Infrastructure upgrades or support, we here to help you and we ensure the secuirty and quality.</p>
                    </div>
                    <!--  <div class="card-footer">
                            <a href="#" class="btn btn-primary btn_cstm">See More</a>
                        </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/technicalre.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Technical Resources</h4>
                        <p class="card-text">We are Offering technical resources throughout United States for infrastructure deployment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog container -->
<div class="container pt-4">

    <div class="text-center cmmn_ttle">
        <h1 class="mt-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Blog</h1>
        <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Vitae natoque dictum etiam semper magnis</small>
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
