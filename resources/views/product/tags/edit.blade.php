@extends('product.layouts.master')

@section('title', '作品標籤管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('tags.update', $tag->id) }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $tag->name }}">
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
