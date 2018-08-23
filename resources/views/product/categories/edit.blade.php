@extends('product.layouts.master')

@section('title', '作品類別管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('categories.update', $category->id) }}">

            <div class="form-group">
              <label for="parent_id"></label>
              <select class="form-control" name="parent_id" id="parent_id">
                <option value="" selected disabled hidden>請選擇上層類別</option>
                @foreach ($nodes as $node)
                  @if ($category->parent_id === $node->id)
                    <option value="{{ $node->id }}" selected="selected">{{ $node->prefixed_name }}</option>
                  @else
                    <option value="{{ $node->id }}">{{ $node->prefixed_name }}</option>
                  @endif
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
            </div>

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
