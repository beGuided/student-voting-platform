@extends('layouts.vote')



@section('title')
  <title>  FCE Voting Platform</title>
@endsection

@section('navbar')
<header class="mynav">
    <!-- nav section start -->

    <nav class="navbar navbar-expand-lg navbar-light bg-tkransparent">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="{{route('welcome')}}"><img src="./assets/images/election ui logo.png" alt="Logo"></a>
            <button id="nav-toggle-icon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="nav-span" class="navbar-toggler-icon"></span>
                <span id="nav-span-2" class="navbar-toggler-close-icon hide-item"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                </ul>
                <form class="d-flex btn-form">
                    <a href="{{route('welcome')}}/user" class="btn btn-success  mx-1">Vote</a>
                    <a href="{{route('preview')}}" id="dark-mode" class="btn btn-primary text-white mx-1">Live Stat
                        Update</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- nav section end -->
</header>
@endsection



@section('header')
<section class="sec-1">
    <div class="home-page">
        <div class="container sl">
            <img src="assets/images/election ui logo 2.png" alt="logo" class="content-h1 home-page-logo img-fluid">
            <p>Free, Fair and Fast</p>
            <h1>election</h1>
            <a href="{{route('welcome')}}/user" class="btn btn-success">Cast Your Vote</a>

        </div>
    </div>

</section>
@endsection


@section('content')
<section class="">
    <div class="info-section">
        <div class="container sec-1">
            <div class="info-section-grid s2">
                <div class="container info-container">
                    <h5>Vote from</h5>
                    <h1>anywhere!</h1>
                    <h6>Join the voting process after completing these steps</h6>
                    <h4><b>STEP 1:</b> Voter Must Be A Financial Member</h4>
                    <h4><b>STEP 2:</b> Get Verified</h4>
                    <h4><b>STEP 3:</b> Login With Matric Number</h4>
                    <h4><b>STEP 4:</b> Cast Your Vote</h4>
                    <h4><b>STEP 5:</b> Preview Election In Real Time</h4>
                </div>
                <div class="container app-screen-container">
                    <img src="assets/images/election app screen.png" alt="app screen" class=" app-screen img-fluid">
                </div>
            </div>
        </div>
    </div>

</section>
<button onclick="topFunction()" id="myBtn" title="Go to top">
    Top
</button>
@endsection


