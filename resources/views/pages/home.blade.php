@extends('layouts.app')
@section('content')
<div>
    @include('inc.top-section')
    {{-- <div class="hero">
        @include('inc.navbar')
        <div class="hero-inner">
            <h1>This is a Usual Website</h1>
            <h3>This is a unusual website</h3>
            <button class="btn btn-warning">Contact Us</button>
        </div>
    </div> --}}
    @include('inc.navbar')
    <div id="carousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.jpeg" alt="">
                    <div class="carousel-caption">
                        <div class="caption-box d-flex flex-column justify-content-center">
                            <h1 class="p-3">Finding Nannies</h1>
                            <p>We serve for the best nannies in the world.</p>
                            <div>
                                <button class="btn btn-outline-success">Contact Us</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpeg" alt="">
                    <div class="carousel-caption">
                        <div class="caption-box d-flex flex-column justify-content-center">
                            <h1 class="p-3">Finding Nannies</h1>
                            <p>We serve for the best nannies in the world.</p>
                            <div>
                                <button class="btn btn-outline-success">Contact Us</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpeg" alt="">
                    <div class="carousel-caption">
                        <div class="caption-box d-flex flex-column justify-content-center">
                            <h1 class="p-3">Finding Nannies</h1>
                            <p>We serve for the best nannies in the world.</p>
                            <div>
                                <button class="btn btn-outline-success">Contact Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#carousel" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
    
</div>
@include('inc.about')
@include('inc.services')
@include('inc.ourteam')
<div class="text-center" style="height:10%">
    <div class="jumbotron bg-dark lead text-light">
        <h3>Feel Free To Contact Us</h3>
    <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11">
    </div>
</div>
@include('inc.contact')
@include('inc.footer')
@endsection