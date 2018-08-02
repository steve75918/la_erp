@extends('product.layouts.master')

@section('title', '發行商管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('brands.store') }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" placeholder="輸入原文名稱">
            </div>

            <div class="form-group">
              <label for="publisher_id">出版社</label>
              <select class="form-control" name="publisher_id" id="publisher_id">
                @foreach ($publishers as $publisher)
                  <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
              </select>
            </div>

            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
