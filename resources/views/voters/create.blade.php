@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">
        {{isset($voter) ? 'Edit Voter': 'Add Voter'}}
    </div>
    <div class="card-body">    
     
    @include('partials.errors')

     <form action="{{isset($voter) ? route('voters.update', $voter->id) : route('voters.store')}}" method='POST' enctype="multipart/form-data">

        
            @csrf
            @if(isset($voter))
                @method('PUT')
            @endif


            <div class="form-group">
                <label for="voter_name"> voter Name</label>
            <input type="text" class="form-control" name="voter_name" id='' value="{{isset($voter) ? $voter->voter_name : ''}}">
                                                                                        
            {{-- for trix editor --}}
{{-- 
       <input id="voter_name"  type="hidden" name="voter_name">
            <trix-editor input="voter_name"></trix-editor>  --}}
        
        </div>

        <div class="form-group">
            <label for="password"> Mat Number</label>
        <input type="text" class="form-control" name="password" id='' value="{{isset($voter) ? $voter->password : ''}}">
    
    </div>


           <div class="form-group">
            <label for="gender"> voter Gender</label>
            <select name="gender" class="form-control" id="">
                <option value="{{isset($voter) ? $voter->gender : ''}}" >
                    {{isset($voter) ? $voter->gender : ''}}
                </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
       </div>

       <div class="form-group">
        <label for="vote_status"> voter status</label>
        <select name="vote_status" class="form-control" id="">
            <option value="{{isset($voter) ? $voter->vote_status : ''}}" >
                {{isset($voter) ? $voter->vote_status : ''}}
            </option>
            <option value="active">Active</option>
            <option value="not active">Not active</option>
        </select>
   </div>



       <div class="form-group">
        <label for="voter_level"> voter Level</label>
        <select name="level" class="form-control" id="">
            <option value="{{isset($voter) ? $voter->level : ''}}" >
                 {{isset($voter) ? $voter->level : ''}}
                </option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
        </select>
   </div>
   <div class="form-group">
  


     <div class="form-group">
        <button type='submit' class="btn btn-success">
           {{isset($voter) ? 'update voter': 'Add voter'}}
        </button>
        </div>

        </form>  
    </div>

</div>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr('#published_at',{
        enableTime:true
    })
</script>

@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection