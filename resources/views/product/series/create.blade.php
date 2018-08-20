@extends('product.layouts.master')

@section('title', 'Series 管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('series.store') }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            <div class="form-group">
              <label for="code_name">代碼</label>
              <input type="text" class="form-control" name="code_name" id="code_name" placeholder="輸入代碼（舊系統使用）">
            </div>

            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
