@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end my-2">
<a href="{{route('categories.create')}}" class="btn btn-success"> Add Category</a>

</div>
{{-- <div>
  <p class="tetc-center"> click on this link to see the list of category to copy from <a href="https://docs.google.com/document/d/1V_EzjNPMMOCif4EJ7E_Pq7lEslx-xj4-WwAsLb1ivpo/edit?usp=sharing" class="text-danger" target="_blank"> click here</a></p>
</div> --}}

 <div class="card card-default">
    <div class="card-header"> Categories</div>

    <div class="card-body">
 @if($categories->count() > 0)
        <table class="table">
            <thead>
              <th>id</th>
                <th>Name</th>
                <th>Candidates count</th>
                <th></th>
            </thead>

            <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                      {{$category->candidates->count()}}
                    </td>
                    <td>
                         {{-- <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm" >
                            Edit
                        </a> --}}

                        <button class="btn btn-danger btn-sm" onclick="handleDelete({{$category->id}})"> Delete</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        @else 
        <h4 class="text-center"> No Categories yet</h4>
        @endif
            <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
    <div class="modal-dialog" role="document">

     <form action="" method ='POST' id='deleteCategoryForm'>

         @csrf
        @method('DELETE')

         <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="deleteModalLabel">Delete category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p class="text-bold text-center"> 
                  Are you sure you want to delete this category
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
    
     var form = document.getElementById('deleteCategoryForm')
    form.action = '/categories/'+ id
 
    $('#deleteModal').modal('show')
}
</script>
    
@endsection

