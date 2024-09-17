@extends('layouts.app')
@section('title')
Show
@endsection
@section('content')

    

 <div class=" justify-content-center">
    <div class="card mt-4 p-1">
        <div class="card-header">
        author info
        </div>
        <div class="card-body">
      <h5 class="card-title">{{$post['title']}}</h5>
      <p class="card-text"> {{$post['desription']}} </p>
      
            </div>
    </div>


        <div class="card mt-4 p-1">
          <div class="card-header">
               book info
          </div>
        <div class="card-body">
            <h5 class="card-title"> {{$post['book']}} </h5>
            <p class="card-text"> {{$post['description']}} </p>
      
        </div>
     </div>
</div>


@endsection