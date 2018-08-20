@extends('product.layouts.master')

@section('title', 'Series 管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('series.update', $oneseries->id) }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $oneseries->name }}">
            </div>

            <div class="form-group">
              <label for="code_name">代碼</label>
              <input type="text" class="form-control" name="code_name" id="code_name" value="{{ $oneseries->origin_name }}">
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
