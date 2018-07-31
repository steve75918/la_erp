@extends('product.layouts.master')

@section('title', '出版社管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="publisher/{{ $publisher->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="text" name="name" value="{{ $publisher->name }}">
            <input type="text" name="origin_name" value="{{ $publisher->origin_name }}">
            <input type="submit">
          </form>
@endsection
