@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

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

<script>
    
function handleDelete(id){
    
     var form = document.getElementById('deletevoterForm')
    form.action = '/voters/'+ id
 
    $('#deleteModal').modal('show')
}
</script>
    
@endsection