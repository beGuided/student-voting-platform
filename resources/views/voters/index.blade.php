@extends('layouts.app')


@section('css')
{{-- link to font awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')


<div class="container">

    @include('partials.dashboard')

    
{{-- 
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                            /////////////
                
                              <p>No. of Positions</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-tasks"></i>
                            </div>
                            <a href="positions.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                            <div class="inner">
                              \\\\\\\\\\\\\\\\\\\
                              <p>No. of Candidates</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-black-tie"></i>
                            </div>
                            <a href="candidates.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                            <div class="inner">
                             /////////////////
                              <p>Total Voters</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-users"></i>
                            </div>
                            <a href="voters.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-red">
                            <div class="inner">
                            //////////////////
                
                              <p>Voters Voted</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-edit"></i>
                            </div>
                            <a href="votes.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div> --}}

    <div class="row mt-5">

        <div
    id="myChart" style="width:100%; max-width:100%; height:500px;">
    </div>
    
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
   
    ['Candidate', 'count'],

            @php
                foreach($candidates as $candidate) {
                    echo "['".$candidate->candidate_name."', ".$candidate->votes->count()."],";
                }
             @endphp

    ]);
    
    var options = {
    title:'Election Stat For all candidate vote'
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
    }
    </script>
    </div>
</div>


@endsection


@section('scripts')


    
@endsection