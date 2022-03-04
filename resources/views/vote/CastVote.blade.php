@extends('layouts.vote')



@section('title')
<title>VOTE -- FCE(T) | E-ELECTION SYSTEM </title>
@endsection

@section('navbar')
<header class="mynav">
        <!-- nav section start -->

        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="{{route('welcome')}}"><img src="/assets/images/election ui logo.png" alt="Logo"></a>
                <button id="nav-toggle-icon" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="nav-span" class="navbar-toggler-icon"></span>
                    <span id="nav-span-2" class="navbar-toggler-close-icon hide-item"></span>
                </button>

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex btn-form">
                        <a id="final_vote" href="{{route('finishVote.index')}}" class="final_vote btn btn-success  mx-1">Finish
                            Voting</a>
                    </form>
                </div> --}}
            </div>
        </nav>
        <!-- nav section end -->
    </header>
@endsection


@section('header')
<section class="sec-1">
    <div class="vote-section s1">
        <div class="container">
            <img src="assets/images/election ui logo 2.png" alt="logo" class="vote-page-logo img-fluid">

            <div class="voting_header ">
                <h1>Welcome to the <b>Voting Area</b></h1>
                <h4>Note the following Instructons!</h4>
            </div>
            <div class="instruction ">

                <li>Make a <b>selection</b> before clicking the vote button</li>
                <li>You <b>cannot</b> change vote after clicking the vote button</li>
                <li>You can choose to  <b>participate or ignore voting  in any office</b> before leaving the voting area</li>
                <li>Once done with voting, click on the options bar and click <b>Submit Vote</b></li>

            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
   

    <div class="container">
        <div class="row mt-2">
            @if(session()->has('success'))
            <div class=" alert alert-success">
              {{session()->get('success')}}
            </div>
        @endif
    
        @if(session()->has('error'))
            <div class=" alert alert-danger">
              {{session()->get('error')}}
            </div>

        @endif
        </div>
       
       <!-- cast your vote -->
    <div class="space"></div>

    @if($candidates->count() > 0)
    
    <section>
        <div class="container">

            @include('partials.errors')

            <form action="{{route('castVote.store')}}" method="POST">  
                @csrf
                @include('partials.elects')
    
             </form> 
     </div>
    </section> 
        @else
    <h1 class="text-center m-5"> No Candidate To Vote</h1>
   
            @endif

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        Top
    </button>


@endsection

<script>



</script>


