@extends('product.layouts.master')

@section('title', '作者管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('authors.update', $author->id) }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $author->name }}">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" value="{{ $author->origin_name }}">
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
