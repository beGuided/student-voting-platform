@extends('layouts.user')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-center"><b> {{ Auth::user()->name }}</b> you are logged in!</p>
                
                    <section style="background-color: rgb(6, 110, 40)">

                        <div data-id="all" class="live-page sec-1">
                            <div class="container text-center s2 ">
                                <img src="assets/images/election ui e-vote logo.png" alt="logo" class="sl live-page-logo img-fluid">
                                <h6 style="font-family: var(--thin-body-font);
                                color: white;">Welcome  {{ Auth::user()->name }}</h6>
                                <h5 style="font-family: var(--thin-body-font);
                                color: white;">Click on the <b>VOTE</b> button to cast your vote.
                                </h5>
                                <!-- buttons -->
                                <form class="text-center mt-5">
                                    <a href="{{route('castVote.index')}}" class="btn btn-warning  m-1">Vote</a>
                                    <a href="{{route('welcome')}}" id="dark-mode" class="btn btn-primary text-white m-1">Back To Home</a>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
