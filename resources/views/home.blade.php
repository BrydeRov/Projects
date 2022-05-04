
@extends('layout')

@section('extra-styles')
<link rel="stylesheet" href="/css/home.css"/>

@section('title' , 'Home')

@section('contenido')

<header>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="/images/background-home.mp4" type="video/mp4">
        
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 justify-content-center text-center align-items-center">
        <div class="w-50 text-white">
          <h1 class="display-3 my-4 m">Home</h1>
          
            <!--Carta-->
            <div class="card text-center text-black mb-5" style=>
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>

        </div>
      </div>
    </div>
  </header>
  
  <!-- Page section example for content below the video header -->
  <section class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are built into Bootstrap.</p>
          <p>The overlay color and opacity can be changed by modifying the <code>background-color</code> and <code>opacity</code> properties of the <code>.overlay</code> class in the CSS.</p>
          <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
          <p class="mb-0">
            Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
          </p>
        </div>
      </div>
    </div>
  </section>


@endsection


