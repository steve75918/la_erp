@extends('product.layouts.master')

@section('title', '作品類別管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('categories.store') }}">
            <div class="form-group">
              <label for="parent_id"></label>
              <select class="form-control" name="parent_id" id="parent_id">
                <option value="" selected disabled hidden>請選擇上層類別</option>
                @foreach ($nodes as $node)
                  <option value="{{ $node->id }}">{{ $node->prefixed_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
