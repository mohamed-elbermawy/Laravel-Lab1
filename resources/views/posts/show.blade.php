@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mt-5">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <h5 class="card-title"><b>Title :- </b>{{$post['title']}}</h5>
      <p class="card-text"><b>Description :-</b><br>{{$post['description']}}</p>
    </div>
  </div>
</div>
@endsection
