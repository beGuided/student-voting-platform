@extends('layouts.app')

@section('content')

<div class="d-flex  justify-content-end m-2">
    <form action="{{route('votes.index')}}" class="input-group" method="get">
        <input type="text" class="form-control" placeholder="search" name="search" value="">
    </form>
</div>

 <div class="card card-default">
    <div class="card-header"> Vote</div>

    <div class="card-body">
        @if($votes->count() > 0)

        <table class="table">
            <thead>
                <th>vote id</th>
                <th>voter Name</th>
                <th>voter Mat Number</th>
                <th>voter level</th>
                <th>Candidates name </th>
                <th>Candidates category </th>
                <th></th>
            </thead> 

            <tbody>
                @forelse($votes as $vote)
                <tr>
                    <td>{{$vote->id}}</td>
                    <td>{{$vote->user->name}}</td>
                    <td>{{$vote->user->mat_number}}</td>
                    <td>{{$vote->user->level}}</td>
                    <td> {{$vote->candidate->candidate_name}}</td>
                    <td>{{$vote->candidate->category->name}} </td>
                   
                </tr>
                @empty
                <h3 class="text-center">
                    No result for query <strong> {{request()->query('search')}}</strong>
                </h3>
                @endforelse
                

            </tbody> 
        </table>
        @else 
        <h4 class="text-center"> No vote yet</h4>
        @endif
        
            <!-- Modal --> 


   

    </div>

</div>

@endsection

@section('scripts')


    
@endsection

