@extends('product.layouts.master')

@section('title', '作者管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('authors.store') }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" placeholder="輸入原文名稱">
            </div>

            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
