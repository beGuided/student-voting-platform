@extends('layouts.app')

@section('content')

 <div class="card card-default">
    <div class="card-header">
        {{ isset($category) ? 'Edit category' : 'Create category' }} </div>
    <div class="card-body">
        @include('partials.errors')

        {{-- <div class="m-4">
            <p class="tetc-center"> click on this link to see the list of category to copy from <a href="https://docs.google.com/document/d/1V_EzjNPMMOCif4EJ7E_Pq7lEslx-xj4-WwAsLb1ivpo/edit?usp=sharing" class="text-danger" target="_blank"> click here</a></p>
          </div> --}}

        <form action=" {{isset ($category) ? route('categories.update', $category->id): route('categories.store')}} "method="POST">
            @csrf

            @if(isset($category))

            @method ('PUT')
            @endif

            {{-- <div class="form-group">

                <label for="name">Name</label>       
                <input type="text" class="form-control" name="name" value="{{isset($category) ? $category->name : ''}}">
                
            </div> --}}

            <div class="form-group">
                <label for="name"> Name</label>
                <select name="name" class="form-control" id="">
                    <option value="" > </option>
                    <option value="President">President </option>
                    <option value="Vice President"> Vice President</option>
                    <option value="General Secretary"> General Secretary</option>
                    <option value="Asst. General Secretary">Asst. General Secretary </option>
                    <option value="Academic Director I">Academic Director I </option>
                    <option value="Academic Director II">Academic Director II </option>
                    <option value="Financial Secretary">Financial Secretary </option>
                    <option value="P.R.O">P.R.O </option>
                    <option value="Treasurer">Treasurer </option>
                    <option value="Sports Director">Sports Director </option>
                    <option value="Social Director">Social Director </option>
                    <option value="Welfare Director">Welfare Director </option>
                    <option value="DSDC Chairman">DSDC Chairman </option>
                    <option value="Deputy Chairman DSDC">Deputy Chairman DSDC </option>
                    <option value="P.R.O DSDC">P.R.O DSDC </option>
                   
                </select>
           </div>
<div class="form-group">
    <button class="but btn-success">
        {{ isset($category) ?'Update Category' : 'Add Category'}}
       </button>
</div>

        </form>
    </div>


</div>

@endsection