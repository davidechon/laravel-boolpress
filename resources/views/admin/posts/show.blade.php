@extends('layouts.admin')

@section('content')
<div class="container">
  <h1>{{$post->title}}</h1>
  <div class="card">
    <img class="card-img-top" src="https://picsum.photos/100/50
    " alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->content}}</p>
      <p class="card-text">{{$post->category->name}}</p>
      <p class="card-text">Pubblicato: {{$post->published ? 'Published' : 'Unpublished'}}</p>
      <small>{{$post->created_at}}</small>
    </div>
  </div>
</div>
@endsection