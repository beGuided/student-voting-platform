@extends('layouts.vote')

@section('title')
    <title>Live Preview</title> 
    
@endsection


@section('navbar')

@endsection


@section('header')

@endsection



@section('content')

@include('partials.sidebar')
 
<section class="home-section">

        <div data-id="all" class="live-page sec-1">
            <div class="container text-center s2 ">
                <img src="assets/images/election ui e-vote logo.png" alt="logo" class="sl live-page-logo img-fluid">
                <h6 style="font-family: var(--thin-body-font);
                color: white;">Welcome to</h6>
                <p>Election Live Stats</p>
                <h5 style="font-family: var(--thin-body-font);
                color: white;">Use the <b>SIDE BAR</b> navigation to view the stats of any category of the ongoing election.
                </h5>
                <!-- buttons -->
                <form class="text-center mt-5">
                    <a href="{{route('welcome')}}/user" class="btn btn-warning  mx-1">Vote</a>
                    <a href="{{route('welcome')}}" id="dark-mode" class="btn btn-primary text-white mx-1">Back To Home</a>
                </form>
            </div>
        </div>

  
</section>

    <script src="js/scrollreveal.js"></script>
    <script src="js/reveal.js"></script>
    <script src="js/live_stat_script.js"></script>
  
  


</body>



@endsection



