@extends('product.layouts.master')

@section('title', '出版社管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('publishers.update', $publisher->id) }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $publisher->name }}">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" value="{{ $publisher->origin_name }}">
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
