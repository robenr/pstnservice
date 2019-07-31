@extends('layouts.site')

@section('title', 'Blog')

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

<!-- blog container -->
<div class="container pt-5 mt-5 anime" data-wow-duration="0.7s" data-wow-delay="0.2s">

    <div class="row">
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

    <nav class="mt-5 mb-5">
        {{ $blogs->links() }}
    </nav>
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
