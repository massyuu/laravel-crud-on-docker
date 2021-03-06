@extends('layout.common')

@section('title', '更新')

@include('layout.header')

@section('content')
  <h1>更新</h1>

  <form method="post" action="/update">
    {{ csrf_field() }}
    <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
    </div>
    <div class="form-group">
      <label for="bodyInput">内容</label>
      <textarea class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">修正</button>
  </form>

@endsection

@include('layout.footer')
