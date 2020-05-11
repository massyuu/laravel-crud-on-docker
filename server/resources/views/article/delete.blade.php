@extends('layout.common')

@section('title', '削除')

@include('layout.header')

@section('content')
  <h1>削除</h1>

  <form method="post" action="/delete">
    {{ csrf_field() }}
    <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
    <div class="form-group">
      <label for="titleInput">タイトル</label>
      <input type="text" readonly class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
    </div>
    <div class="form-group">
      <label for="bodyInput">内容</label>
      <textarea readonly class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">削除</button>
  </form>

@endsection

@include('layout.footer')
