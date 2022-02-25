@extends('layouts.app')

@section('content')

{{-- <div class="d-flex justify-content-end mb-2">
    <a href="{{route('users.create')}}" class="btn btn-success"> Add user</a>
</div> --}}

     <div class="card card-default">
        <div class="card-header"> users</div>
            <div class="card-body">
                @if($users->count() > 0)

                <table class="table">
                    <thead>
                        
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mat No</th>
                        <th>level</th>
                        <th>User Role</th>
                        <th></th>

                    </thead>
                    <tbody>
                        @foreach($users as $user)

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->mat_number}}</td>
                            <td>{{$user->level}}</td>
                            <td>{{$user->role}}</td>
                            <td></td>                          
                            {{-- <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                           <td><button class="btn btn-danger btn-sm" onclick="handleDelete({{$user->id}})"> Delete</button></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <h3 class="text-center"> No user yet</h3>
                @endif
                       <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
        <div class="modal-dialog" role="document">
    
         <form action="" method ='POST' id='deleteuserForm'>
    
             @csrf
            @method('DELETE')
    
             <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="deleteModalLabel">Delete user</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <p class="text-bold text-center"> 
                      Are you sure you want to delete this user
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
    
     var form = document.getElementById('deleteuserForm')
    form.action = '/users/'+ id
 
    $('#deleteModal').modal('show')
}
</script>
    
@endsection