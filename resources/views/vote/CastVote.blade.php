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

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <form class="d-flex btn-form">
                        <a id="final_vote" href="{{route('finishVote.index')}}" class="final_vote btn btn-success  mx-1">Finish
                            Voting</a>
                    </form>
                </div>
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
                <li>You must <b>participate in all election category</b> before leaving the voting area</li>
                <li>Once done with voting, click on the options bar and click <b>Finish Voting</b></li>

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
    <section>
        <div class="container">
            <div class="row">

            <form action="{{route('castVote.store')}}" method="POST">  

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>The <b>President</b></h3>
                            
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'President') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            @include('partials.errors')

                           @csrf
                              
                            <div class="candidate-select-box">
                                 <select  name="presi" class="candidate_select form-control" > 
                                   
                                    <option value="">Select Candidate</option> 
                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'President') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                              
                            </div>
                        {{-- </form> --}}


                        </div>
                    </div>
                </div>


                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>The Vice <b>President</b></h3>

                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Vice President') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            @include('partials.errors')

                           @csrf
                              
                            <div class="candidate-select-box">
                                 <select name="vice" class="candidate_select form-control" > 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Vice President') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                            
                            </div>
                        {{-- </form> --}}

                        </div>
                    </div>
                </div>

                 <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Secretary <b>General</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Secretary General') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Secretary General') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                        
                            </div>
                        {{-- </form> --}}

                        </div>
                    </div>
                </div>

                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Asst. Secretary <b>General</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Asst. Secretary General') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                           
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id[]" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Asst. Secretary General') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                            
                            </div>
                        

                        </div>
                    </div>
                </div>

                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Academic <b>Director I</b></h3>
                            
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Academic Director I') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                        
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            @include('partials.errors')
                           @csrf
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Academic Director I') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                               
                            </div>
                       

                        </div>
                    </div>
                </div>
                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Academic <b>Director II</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Academic Director II') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>

                            @include('partials.errors')

                            {{-- <form action="{{route('castVote.store')}}" method="POST"> --}}
                           @csrf
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Academic Director II') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                            </div>
                   

                        </div>
                    </div>
                </div>
                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>Financial <b>Secretary</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'Financial Secretary') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="candidate_id" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'Financial Secretary') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                               
                            </div>
                    

                        </div>
                    </div>
                </div>
                <!-- next candidate -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="voting-box">
                            <!-- Election Offie -->
                            <h3>The <b>P.R.O</b></h3>
                            @foreach ($candidates as $candidate)
                            @if($candidate->category->name == 'P.R.O') 

                            <div class="container">
                                <!-- candidate 1 -->
                                <div class="candidate">     
                                    <!-- candidate image -->
                                    <div class="candidate-photo">
                                        <img src="/storage/{{$candidate->image}}" alt="candidate 1">
                                    </div>
                                    <!-- candidate name -->
                                    <h5 class="candidate-name">{{$candidate->candidate_name}}</h5>

                                </div>

                            </div>
                            @else
                            @endif
                            @endforeach
                            <!-- Candidate Selection code -->
                            <h6>Select Your <b>Candidate</b></h6>
                              
                            <div class="candidate-select-box">
                                 <select id="candidate_select" name="pro" class="candidate_select form-control" id="exampleFkormControlSelect2"> 
                                   
                                    <option value="">Select Candidate</option> 

                                    @foreach ($candidates as $candidate)
                                    @if($candidate->category->name == 'P.R.O') 

                                    <option value="{{$candidate->id}}"> {{$candidate->candidate_name}} </option>
                                    @endif
                                  @endforeach
                                </select> 
                                
                            </div>
                      
                </div>

                @if($candidate->is_voted_by_auth_user())
                <a href="#" class="btn btn-danger btn-sm"> Voted</a>    
                 @else
                 <button  type="submit" class="vote_btn btn btn-warning btn-sm">Vote</button>

                 @endif
                
            </form> 
            </div>
        </div>

    </section> 
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        Top
    </button>


@endsection

<script>



</script>


