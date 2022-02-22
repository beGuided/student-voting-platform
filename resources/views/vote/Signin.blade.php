@extends('layouts.vote')



@section('title')
    Live Preview
@endsection


@section('navbar')
<header class="mynav">
    <!-- nav section start -->

    <nav class="navbar navbar-expand-lg navbar-light bg-tkransparent">
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
                    <a href="{{route('welcome')}}" class="btn btn-success  mx-1">Back To Home</a>
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
<section>
    <div class="live-page">
        <div class="container">
            <img src="/assets/images/election ui e-vote logo.png" alt="logo" class="live-page-logo img-fluid">
            <p>Election Live Stats</p>
        </div>
    </div>

</section>
@endsection

@section('content')
   
<section>

    <div class="login-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                        @if(session('status'))
                        {{session('ststus')}}
                      @endif
                        <form action="{{route('signin')}}" method="POST">
                            @csrf
                            {{-- <h3 class="text-center m-5">Sign in to Vote</h3> --}}
        
                            <div class="form-group login-inputs">
                                <label for="my-input">Full Name</label>
                                <input id="my-input" class="form-control" type="text" placeholder="Your name" name="voter_name">
                               
                                @error('voter_name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class=" form-group login-inputs">
                                <label for="my-input">Matric Number</label>
                                <input id="my-input" class="form-control" type="text" placeholder=" Your Matric Number" name="password">
                               
                                @error('password')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
        
                            <div class="form-group mt-3">
                                <button type="submit" id="" class="btn btn-primary">
                                    Sign
                                </button>
                            </div>
                           
                        </form>
                
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
            </div>
            {{-- <div class="login-container container">   --}}
             
        </div>

        <div class="container">

            <div id="validate-1" class="validation text-success">
                <h2>Provide your <br>Login Details <br> <small>Join the voting process</small>
                </h2>
            </div>
            {{-- <div id="validate-two" class="validation-2 text-success validation-hidden">
                <h2>Validating <br> Details <br> <small>Please wait...</small>
                </h2>
            </div> --}}
        </div>
    </div>
    

</section>
@endsection

