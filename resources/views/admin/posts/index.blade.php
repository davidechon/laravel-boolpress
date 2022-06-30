@extends('layouts.admin')

@section('content')
<div class="container">
  <a href="{{route('admin.posts.create')}}" class="btn btn-success">Crea nuovo post</a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Creation date</th>
        <th scope="col">Modifica</th>
        {{-- <th scope="col">Elimina</th> --}}
      </tr>
    </thead>
    <tbody>  
      @foreach ($posts as $post)
      <tr>
        <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->id}}</a></td>
        <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a></td>
        {{-- <td><a href="{{route('admin.posts.delete', $post->id)}}" class="btn btn-danger">Elimina</a></td> --}}
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection