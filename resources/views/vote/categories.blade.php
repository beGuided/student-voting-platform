@extends('layouts.vote')
<meta http-equiv="refresh" content="10">

<link rel="stylesheet" href="../css/live_stat_style.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../icon.css">
<link rel="stylesheet" href="..css/style.css">
<link rel="stylesheet" href="../css/bootstrap.css">

@section('content')
<body>
   
@include('partials.sidebar')


        
<section class="home-section">

            <div class="Elect-section">
                <div class="container-fluid elect-row">
                    <div class="elect-office ">
                        <h5>OFFICE OF THE</h5>
                        <h2>{{$category->name}}</h2>
                    </div>
                    <div class="row mt-3">

                        @foreach ($candidates as $candidate)
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <div class="container elect-info">
                                <div class="elect-img-contain">
                                    <img src="/storage/{{$candidate->image}}" alt="elect img" class="img-fluid elect-img">
                                </div>
                                <div class="elect-details">
                                    <h5 class="elect-name">{{$candidate->candidate_name}}</h5>
                                    <h4 id="vote_count" class="elect-votes">{{$candidate->votes->count()}}</h4>
                                  
                                </div>
                            </div>
                        </div>
                        @endforeach

                     
                    </div>
                </div>
            </div>
            <div class="space"></div>
        </section>

    
   

    <script src="../js/scrollreveal.js"></script>
    <script src="../js/reveal.js"></script>
    <script src="../js/live_stat_script.js"></script>
   
  


</body>



@endsection



