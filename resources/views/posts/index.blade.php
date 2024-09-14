@extends('layouts.app')

@section('title')
    Index
@endsection
@section('content')
<div class="justify-content-center d-flex mt-4 mb-4">
<a href="{{route('posts.create')}}" class="btn btn-success  ">Create</a>
</div>
<div class="justify-content-center d-flex ">
<table class="table w-75" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Created By</th>
        <th scope="col">Book name</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          
      
      <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['created_by']}}</td>
        <td>{{$post['book']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>
            <a href="{{route('posts.show',$post['id'])}}" class="btn btn-primary">View</a>
            <a href="{{route('posts.edit',$post['id'])}}"  class="btn btn-success">Edit</a>
            <form action="{{route('posts.destroy',1)}}" method="POST" style="display: inline">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger ">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection