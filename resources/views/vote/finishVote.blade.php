@extends('layouts.vote')



@section('title')
  <title> THANK YOU| FCE Voting Platform</title>
@endsection

@section('navbar')

@endsection



@section('header')

@endsection


@section('content')
<section>
    <div class="thank-you-section sec-1">
        <div class="container s1">
            <div class="thank-you-logo">
                <img src="assets/images/election ui logo 2.png" alt="logo" srcset="">
            </div>
            <div class="thank-you-message">
                <h1><b>{{Auth::user()->name}}</b>.</h1>
                <h1><b>{{Auth::user()->mat_number}}</b>.</h1>
                <h3> You have completed the voting process</h3>
                <h5>You can view the ongoing election in real time</h5>
            </div>
            <div class="thank-you-btn">
                <form class="d-flex btn-form">
                    <a href="{{route('preview')}}" id="dark-mode" class="btn btn-primary text-white mx-1">Live Stat
                        Update</a>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection


