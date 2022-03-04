@extends('layouts.app')

@section('content')

 <div class="card card-default">
    <div class="card-header">
        {{ isset($category) ? 'Edit category' : 'Create category' }} </div>
    <div class="card-body">
        @include('partials.errors')

        <div class="m-4">
            <p class="tetc-center"> click on this link to see the list of category to copy from <a href="https://docs.google.com/document/d/1V_EzjNPMMOCif4EJ7E_Pq7lEslx-xj4-WwAsLb1ivpo/edit?usp=sharing" class="text-danger" target="_blank"> click here</a></p>
          </div>

        <form action=" {{isset ($category) ? route('categories.update', $category->id): route('categories.store')}} "method="POST">
            @csrf

            @if(isset($category))

            @method ('PUT')
            @endif

            <div class="form-group">
                <label for="name">Name</label>       
                <input type="text" class="form-control" name="name" value="{{isset($category) ? $category->name : ''}}">
                
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