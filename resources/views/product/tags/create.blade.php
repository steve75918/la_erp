@extends('product.layouts.master')

@section('title', '作品標籤管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('tags.store') }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
