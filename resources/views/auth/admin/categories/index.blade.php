@extends('layouts.app')
@section('content')
    <table class="table">

  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th colspan="3">ACTIONS</th>
    </tr>
  </thead>

  <tbody>
      @foreach ($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{route('admin.categories.show', $category->id)}}">View</a></td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
      @endforeach
  </tbody>

</table>
@endsection
