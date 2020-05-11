@extends('layout.common')

@section('title', 'インデックス')

@include('layout.header')

@section('content')
  <h1>一覧</h1>
  <p><a href="/create" class="btn btn-primary">新規追加</a></p>

  @foreach ($articles as $article)
  <div class="card mb-2">
    <div class="card-body">
      <h4 class="card-title">{{ $article->title }}</h4>
      <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
      <p class="card-text">{{ $article->body }}</p>
      <a href="/update/{{ $article->id }}" class="card-link">修正</a>
      <a href="/delete/{{ $article->id }}" class="card-link">削除</a>
    </div>
  </div>
  @endforeach
@endsection

@include('layout.footer')
