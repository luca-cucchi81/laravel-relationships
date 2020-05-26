@extends('layouts.app')
@section('content')
    <table class="table">

  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>DESCRIPTION</th>
      <th colspan="2">ACTIONS</th>
    </tr>
  </thead>

  <tbody>
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>

  </tbody>

</table>
@endsection
