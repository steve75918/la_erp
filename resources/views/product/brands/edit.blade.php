@extends('product.layouts.master')

@section('title', '發行商管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('brands.update', $brand->id) }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $brand->name }}">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" value="{{ $brand->origin_name }}">
            </div>

            <div class="form-group">
              <label for="publisher_id">出版社</label>
              <select class="form-control" name="publisher_id" id="publisher_id">
                <option value="" selected disabled hidden>請選擇出版社</option>
                @foreach ($publishers as $publisher)
                  @if ($publisher->id === $brand->publisher_id)
                    <option value="{{ $publisher->id }}" selected="selected">{{ $publisher->name }}</option>
                  @else
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
