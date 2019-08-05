@extends('layouts.site')

@section('title', 'Network Design')

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
                                    <h1 class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Network Design</h1>
                                    <small class="intro anime" data-wow-duration="1s" data-wow-delay="0.2s">We full fill your dream come true</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/NetrK_banner1.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>

<div class="container py-5">

    <!-- /.row -->

    <!-- START THE FEATURETTES -->

    <div class="row featurette pt-5 pb-5">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <p class="para001">Our data center design consulting service includes detailed analysis of infrastructure requirement, hardware selection, proof of concept, implementation and complete project management. We negotiate with the carriers on clients' behalf. Data center consolidation and network optimisation service include infrastructure and service migration.</p>
            <p class="para001">We provide a wide range of solutions from Spine/Leaf data center design to full scale MPLS and/or segment routing based enterprise WAN network. Our solutions are tailored to existing culture and future requirement. We partner with most of the large network vendors like Cisco, Juniper, and Cumulus. We leave the vendor selection to clients as we don’t favour anyone in particular. If you cannot figure out, we pitch in to help. We help you to select the best network vendor, considering your preferences and requirements.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto brd_r40" src="/images/n1.jpg">
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
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/cicsco.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Cisco</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <!--  <div class="card-footer">
                            <a href="#" class="btn btn-primary btn_cstm">See More</a>
                        </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/juniper.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Juniper</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.9s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/cumlus.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Cumulus</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
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
