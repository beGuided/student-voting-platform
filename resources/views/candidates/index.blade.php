@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end my-2">
    <a href="{{route('candidates.create')}}" class="btn btn-success"> Add Candidate</a>
</div>

    <div class="card card-default">
        <div class="card-header"> Candidates</div>
            <div class="card-body">
                @if($candidates->count() > 0)
                <table class="table table-responsive
                ">
                    <thead>
                        <th>id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>sex</th>
                        <th>level</th>
                        <th>category</th>
                        <th>vote count</th>
                        <th></th>
                        <th></th>

                    </thead>
                    <tbody>
                        @foreach($candidates as $candidate)

                        <tr>
                            <td>{{$candidate->id}}</td>
                            <td>
                                <img src="/storage/{{$candidate->image}}"  width="100px" height="60px" alt="img"> 
                             </td>
                            <td>{{$candidate->candidate_name}}</td>
                            <td>{{$candidate->gender}}</td>
                            <td>{{$candidate->candidate_level}}</td>
                            <td>
                                <a href="{{route('categories.edit', $candidate->id)}}">
                                    {{$candidate->category->name}}
                                
                                </a> 
                            </td>
                            <td>{{$candidate->votes->count()}}</td>
                            <td>
                                <a href="{{route('candidates.edit', $candidate->id)}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                           <td><button class="btn btn-danger btn-sm" onclick="handleDelete({{$candidate->id}})"> Delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h3 class="text-center"> No candidate yet</h3>
                @endif
                       <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
    
         <form action="" method ='POST' id='deleteCandidateForm'>
    
             @csrf
            @method('DELETE')
    
             <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="deleteModalLabel">Delete candidate</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p class="text-bold text-center"> 
                      Are you sure you want to delete this candidate
                    </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No, GO Back</button>
                  <button type="submit" class="btn btn-danger">yes, Delete</button>
                </div>
              </div>
         </form>
        </div>
      </div> 
        </div>
    </div>


@endsection


@section('scripts')

<script>
    
function handleDelete(id){
    
     var form = document.getElementById('deleteCandidateForm')
    form.action = '/candidates/'+ id
 
    $('#deleteModal').modal('show')
}
</script>
    
@endsection