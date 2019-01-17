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
                        <h1>Finding Nannies</h1>
                        <p>We serve for the best nannies in the world.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpeg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpeg" alt="">
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
@include('inc.contact')
@include('inc.footer')
@endsection