@extends('layout.common')

@section('title', '新規追加完了')

@include('layout.header')

@section('content')
  <h1>新規追加完了</h1>

  <div class="alert alert-primary" role="alert">
    新規追加しました。
    <a href="/" class="btn btn-primary">一覧に戻る</a>
  </div>
@endsection

@include('layout.footer')
