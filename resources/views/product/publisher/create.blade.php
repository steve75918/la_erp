@extends('product.layouts.master')

@section('title', '出版社管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('publishers.store') }}">
            {{ csrf_field() }}
            <input type="text" name="name" value="">
            <input type="text" name="origin_name" value="">
            <input type="submit">
          </form>
@endsection
