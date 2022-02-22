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

        <!-- sectons are all hidden -->
        {{-- <section data-id="presi">
            <div class="Elect-section item ">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>President</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                        @if($candidate->category->name == 'President') 
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                  
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                     
                    </div>
                </div>
            </div>
            <div class="space"></div>
        </section>

        <section data-id="vicep">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Vice President</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Vice President') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count"class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="sec">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Secetary General</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Secetary General') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="asstsec">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Asst. Secretary General</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Asst. Secretary General') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="acadai">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Academic Director 1</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Academic Director') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="acadaii">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Academic Director 2</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Academic Director 2') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="finance">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Financial Secretary</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Financial Secretary') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="pro">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>P.R.O</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'P.R.O') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="treasurer">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>treasurer</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Vice President') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="sport">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Sport Director</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Sport Director') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="social">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Social Director</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Social Director') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>

        <section data-id="welfare">
            <div class="Elect-section item">
                <div class="container elect-row">
                    <div class="elect-office">
                        <h5>OFFICE OF THE</h5>
                        <h2>Welfare Director</h2>
                    </div>
                    <div class="row">

                        @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Welfare Director') 

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="assets/images/elect-img/2.JPG" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                </div>
                            </div>
                        </div>

                        @else
                        @endif
                        @endforeach

                    </div>
                </div>
            </div> 
            <div class="space"></div>
        </section>--}}
     </section> 


    <script src="js/scrollreveal.js"></script>
    <script src="js/reveal.js"></script>
    <script src="js/live_stat_script.js"></script>
   
   <script>
        function update() {
  $.get("php/preview.php", function(data) {
    $("#vote_count").html(data);
    window.setTimeout(update, 5000);
  });

  

        }

        <script>
        $(document).ready(function(){
             $("#vote_count").load("php/preview.php");
            setInterval(function() {
                $("#div_refresh").load("php/preview.php");
            }, 1000);
        });
     
    </script>
    </script>


</body>



@endsection



