@extends('layouts.app')
@section('content')
    <form action="{{route('admin.categories.store')}}" method="post">
        @csrf
        @method('POST')

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" placeholder="Enter description">
      </div>

      <button type="submit" class="btn btn-primary">CREATE</button>
    </form>
    @foreach ($errors->all() as $message)
        {{$message}}
    @endforeach
@endsection
