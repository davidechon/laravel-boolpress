@extends('layouts.admin');

@section('content')
<div class="container">
  <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}" placeholder="Inserisci titolo">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea name="content" id="content"  cols="60" rows="5">{{old('content', $post->content)}}</textarea>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select name="category_id" id="category"class="form-control">
        <option value="">Select category</option>
        @foreach ($categories as $category)
          <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" {{old('published', $post->published) ? 'checked' : ''}} id="published" name="published">
      <label class="form-check-label" for="published">Pubblicato</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
@endsection 