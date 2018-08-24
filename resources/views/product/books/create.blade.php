@extends('product.layouts.master')

@section('title', 'Book 管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('books.store') }}">
            <div class="form-group">
              <label for="book_id">Book ID</label>
              <input type="text" class="form-control" name="book_id" id="book_id" placeholder="請輸入 Book ID">
            </div>

            <div class="form-group">
              <label for="series_id">Series</label>
              <select class="form-control" name="series_id" id="series_id">
                <option value="" selected disabled hidden>請選擇 Series</option>
                @foreach ($series as $oneSeries)
                  <option value="{{ $oneSeries->id }}">{{ $oneSeries->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" placeholder="輸入原文名稱">
            </div>

            <div class="form-group">
              <label for="desc">簡介</label>
              <input type="text" class="form-control" name="desc" id="desc" placeholder="輸入簡介">
            </div>

            <div class="form-group">
              <label for="cost_48hr">成本：48 小時</label>
              <input type="text" class="form-control" name="cost_48hr" id="cost_48hr" placeholder="輸入 48 小時價格">
            </div>

            <div class="form-group">
              <label for="cost_limitless">成本：永久購買</label>
              <input type="text" class="form-control" name="cost_limitless" id="cost_limitless" placeholder="輸入永久購買價格">
            </div>

            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
