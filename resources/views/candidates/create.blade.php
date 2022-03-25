@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">
        {{isset($candidate) ? 'Edit Candidate': 'Add Candidate'}}
    </div>
    <div class="card-body">    
     
    @include('partials.errors')

     <form action="{{isset($candidate) ? route('candidates.update', $candidate->id) : route('candidates.store')}}" method='POST' enctype="multipart/form-data">

        
            @csrf
            @if(isset($candidate))
                @method('PUT')
            @endif


            <div class="form-group">
                <label for="candidate_name"> Candidate Name</label>
            <input type="text" class="form-control" name="candidate_name" id='' value="{{isset($candidate) ? $candidate->candidate_name : ''}}">
                                                                                        
            {{-- for trix editor --}}
{{-- 
       <input id="candidate_name"  type="hidden" name="candidate_name">
            <trix-editor input="candidate_name"></trix-editor>  --}}
        
        </div>

           <div class="form-group">
            <label for="gender"> Candidate Gender</label>
            <select name="gender" class="form-control" id="">
                <option value="{{isset($candidate) ? $candidate->gender : ''}}" >
                    {{isset($candidate) ? $candidate->gender : ''}}
                </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
       </div>

       <div class="form-group">
        <label for="candidate_level"> Candidate Level</label>
        <select name="candidate_level" class="form-control" id="">
            <option value="{{isset($candidate) ? $candidate->candidate_level : ''}}" >
                 {{isset($candidate) ? $candidate->candidate_level : ''}}
                </option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
        </select>
   </div>
   <div class="form-group">
    <label for="category"> Candidate Category</label>
    <select name="category_id" class="form-control" id="">
       <option value=""></option>
        @foreach($categories as $category)
       
        <option value="{{$category->id}}"
         
            @if(isset($candidate))
                @if($category->id == $candidate->category_id)
                    selected
                @endif

            @endif 
            >
            {{$category->name}}
        </option>
    @endforeach

    </select>
</div>


<div class="form-group">
  {{-- <label for="published_at"> published at</label>
<input type="text" class="form-control" name="published_at" id='published_at'> --}}
@if(isset($candidate))
    
<div class="form-group">
    <img src="{{asset($candidate->image)}}" alt="img" style="width:100%;">
</div>
@endif

</div>

   <div class="form-group">
    <label for="image"> Candidate Image</label>
<input type="file" class="form-control" name="image" id='title'>
</div>


    <div class="form-group">
        <button type='submit' class="btn btn-success">
           {{isset($candidate) ? 'update Candidate': 'Add Candidate'}}
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