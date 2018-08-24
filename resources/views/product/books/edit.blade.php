@extends('product.layouts.master')

@section('title', 'Book 管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('books.update', $book->id) }}">
            <div class="form-group">
              <label for="book_id">Book ID</label>
              <input type="text" class="form-control" name="book_id" id="book_id" value="{{ $book->book_id }}">
            </div>

            <div class="form-group">
              <label for="series_id">Series</label>
              <select class="form-control" name="series_id" id="series_id">
                <option value="" selected disabled hidden>請選擇 Series</option>
                @foreach ($series as $oneSeries)
                  <option value="{{ $oneSeries->id }}" {{ ($oneSeries->id === $book->series_id)? 'selected': '' }}>{{ $oneSeries->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $book->name }}">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" value="{{ $book->origin_name }}">
            </div>

            <div class="form-group">
              <label for="desc">簡介</label>
              <input type="text" class="form-control" name="desc" id="desc" value="{{ $book->desc }}">
            </div>

            <div class="form-group">
              <label for="cost_48hr">成本：48 小時</label>
              <input type="text" class="form-control" name="cost_48hr" id="cost_48hr" value="{{ $book->cost_48hr }}">
            </div>

            <div class="form-group">
              <label for="cost_limitless">成本：永久購買</label>
              <input type="text" class="form-control" name="cost_limitless" id="cost_limitless" value="{{ $book->cost_limitless }}">
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
