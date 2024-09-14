@extends('layouts.app')
@section('title')
    Create a new post
@endsection

@section('content')

<form class="container" action="{{route('posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input  name='title' type="text" class="form-control" id="title" >
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
      </div>

    <div class="form-group">
      <label for="creators">Creators</label>
      <select name="creators"  class="form-control" id="creators">
        <option value="1" >1</option>
        <option value="2" >2</option>

      </select>
    </div>
    <button type="submit" class="btn btn-success mt-2">Success</button>

  </form>
  
@endsection