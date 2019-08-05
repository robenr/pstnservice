@extends('layouts.site')

@section('title', 'Cloud Services')

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
                                    <h1 class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Cloud Services</h1>
                                    <small class="intro anime" data-wow-duration="1s" data-wow-delay="0.2s">We full fill your dream come true</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/images/cld_bannr.jpg" class="imGbannrBG" />
            </div>
        </div>
    </div>

</div>

<div class="container py-5">

    <!-- /.row -->

    <!-- START THE FEATURETTES -->

    <div class="row featurette pt-5 pb-5">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <p class="para001"><strong class="text_lrge primary_color">Cloud services</strong> is a broad word to start with. In simple terms, it can be said as any service involving the use of cloud computing. Cloud services are meant to make the access towards applications, resources and services super easy. They have several benefits like cost reduction, providing easy access of applications or services to crowd, improved performance, higher productivity and a lot.</p>
            <p class="para001">PSTN brings you the best cloud services in the current industry. Amazon Web Services or AWS is a cloud computing platform from Amazon. This is the most on-demand cloud computing service with a friendly interface. Azure is the cloud computing service brought to light by Microsoft. PSTN has a full suit of both AWS and Azure with the top-notch cloud architects at your service.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto brd_r40" src="/images/cloudser.jpg">
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
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/aws.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">AWS</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <!--  <div class="card-footer">
                            <a href="#" class="btn btn-primary btn_cstm">See More</a>
                        </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/azure.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Azure</h4>
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
