@extends('layouts.site')

@section('title', 'White Box Internet/Generic Enterprise Network')

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
                                    <h1 class="anime" data-wow-duration="0.7s" data-wow-delay="0.2s">White Box Internet/Generic Enterprise Network</h1>
                                    <small class="intro anime" data-wow-duration="1s" data-wow-delay="0.2s">Measure up with maximum accuracy</small>
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

    <div class="row featurette pt-5 pb-5">
        <div class="col-md-6 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
            <p class="para001">Whitebox internet, the future of networking, is safe in our hands. PSTN master in making internet designs and solutions suitable according to every client requirement. We do this after a deep analysis about the client needs and by giving utmost care and attentiveness to the existing environment.</p>
            <p class="para001">We provide a full infrastructure solution which includes hardware like Aarcus, Versa and/or Cumulus based Quanta/Acton, all after measuring and analysing the demands and necessities of the client network.</p>
        </div>
        <div class="col-md-6 anime" data-wow-duration="1s" data-wow-delay="0.2s">
            <img class="featurette-image img-fluid mx-auto brd_r40" src="/images/whitebox.jpg">
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
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/versa.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Versa</h4>
                        <p class="card-text">Did you know versa has established the first open and software-based SDWAN ecosystem? Yes, they did and we uses it. Versa offers a wide range of platforms capable of accelerating large scale industry deployment. Versa makes networking simple and cost-efficient.</p>
                    </div>
                    <!--  <div class="card-footer">
                            <a href="#" class="btn btn-primary btn_cstm">See More</a>
                        </div> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/arrcus.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Aarcus</h4>
                        <p class="card-text">Aarcus advanced capabilities enable organizations to cost-effectively build massively scalable infrastructure across physical, virtual (VM and container), and cloud network environments while delivering superior performance, security, and deployment flexibility. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">
                <div class="card">
                    <figure class="carWrapper"><img class="card-img-top" src="/images/inner_serv/cumlus.jpg" alt=""></figure>
                    <div class="card-body">
                        <h4 class="card-title">Cumulus</h4>
                        <p class="card-text">Are you looking for speedy deployments? Cumulus is your answer. Efficient, open, modern and more is what Cumulus offers. PSTN is equipped with a strong team who can handle networking like masters. With promised security, flexible architecture and reduced cost, Cumulus guarantees fast IT delivery too.</p>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<!-- blog container 
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
</div> blog end -->
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

</html>
