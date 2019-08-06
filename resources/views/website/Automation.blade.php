@extends('layouts.site')

@section('title', 'Automation')

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
                                    <h1 class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Automation</h1>
                                    <small class="intro anime" data-wow-duration="1s" data-wow-delay="0.2s">How do you want your system to be automated? Full or partial?</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/bannr_automtn.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>

<div class="container py-5">

    <!-- /.row -->

    <!-- START THE FEATURETTES -->

    <div class="row featurette pt-5 pb-5">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <p class="para001"><strong class="text_lrge primary_color">Automation</strong> is the process of reducing the use of humans in the process. By this way, we can increase the productivity, safety, quality and reduce labour, process time etc. Automation is a must as it depicts smart and efficient working.</p>
            <p class="para001">PSTN let you choose between a complete package of automation platform deployment and a custom based automation solution. Afterall, who doesn’t want higher productivity in least cost? It’s a win-win deal.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto brd_r40" src="/images/automation.jpg">
        </div>
    </div>
    <!-- /END THE FEATURETTES -->

</div> <!-- end of 2 section container -->

<section class="innr_servcs">
    <div class="container">
        <div class="text-center cmmn_ttle">
            <h1 class="mt-5 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Our Solutions</h1>
            <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">We Accelerate Your Ambitions</small>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.5s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/ansilbe.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Ansible</h4>
                        <p class="card-text">Custom solution to provide on-prem/off prem seam less automation though single source.</p>
                    </div>
                    <!--  <div class="card-footer">
                            <a href="#" class="btn btn-primary btn_cstm">See More</a>
                        </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/anuta.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Anuta</h4>
                        <p class="card-text">Complete automation platform deployment with almost all major vendor equipment support.</p>
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
        <small class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Learn, Discover and share the power of information</small>
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
