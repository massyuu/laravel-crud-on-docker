@extends('layout.common')

@section('title', '削除完了')

@include('layout.header')

@section('content')
  <h1>削除完了</h1>

  <div class="alert alert-primary" role="alert">
    削除しました。
    <a href="/" class="btn btn-primary">一覧に戻る</a>
  </div>
@endsection

@include('layout.footer')
