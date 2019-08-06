@extends('layouts.site')

@section('title', 'Blog Post')

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
                                    <h1 class="anime" data-wow-duration="0.5s" data-wow-delay="0.2s">Blog</h1>
                                    <small class="intro anime" data-wow-duration="0.7s" data-wow-delay="0.2s">Learn, Discover and share the power of information</small>
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
<div class="container pt-4 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 mauto blogEdit">

            <!-- Title -->
            <h1 class="mt-5 mt-5">{{ $blog['blog_title'] }}</h1>

            <!-- Author -->
            <p class="lead">
                <a class="btn_cstm primary_color" href="{{ url('blog') }}"><i class="icomoon icon-arrow-left"></i> Back to blogs</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <em>Posted on {{ date('M d, Y', strtotime($blog['created_at'])) }} at {{ date('h:m A', strtotime($blog['created_at'])) }}</em>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{ asset('images/blogs/'.$blog['featured_image']) }}" alt="">

            <hr>

            <!-- Post Content -->
            {!! $blog['blog_content'] !!}

        </div>


    </div>
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
