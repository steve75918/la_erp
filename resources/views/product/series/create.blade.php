@extends('product.layouts.master')

@section('title', 'Series 管理 - 新增')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('series.store') }}">
            <div class="form-group">
              <label for="series_id">Series ID</label>
              <input type="text" class="form-control" name="series_id" id="series_id" placeholder="請輸入 Series ID">
            </div>

            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="輸入中文名稱">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" placeholder="輸入原文名稱">
            </div>

            <div class="form-group">作者</div>
            @foreach ($authors as $author)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $author->id }}" name="author_ids[]" value="{{ $author->id }}">
              <label class="form-check-label" for="inlineCheckbox{{ $author->id }}">{{ $author->name }}</label>
            </div>
            @endforeach

            <div class="form-group">
              <label for="brand_id">出版社</label>
              <select class="form-control" name="brand_id" id="brand_id">
                <option value="" selected disabled hidden>請選擇出版社</option>
                @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="desc">簡介</label>
              <input type="textfield" class="form-control" name="desc" id="desc" placeholder="輸入簡介">
            </div>

            <div class="form-group">
              <label for="categories_id">類別</label>
              <select class="form-control" name="category_ids" id="categories_id">
                <option value="" selected disabled hidden>請選擇類別</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->prefixed_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">標籤</div>
            @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $tag->id }}" name="tag_ids[]" value="{{ $tag->id }}">
              <label class="form-check-label" for="inlineCheckbox{{ $tag->id }}">{{ $tag->name }}</label>
            </div>
            @endforeach

            <div class="form-group">是否為 18 禁</div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inlineRadio1" name="is_adult_only" value="0" checked>
              <label class="form-check-label" for="inlineRadio1">否</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="inlineRadio2" name="is_adult_only" value="1">
              <label class="form-check-label" for="inlineRadio2">是</label>
            </div>

            {{ csrf_field() }}

            <div class="form-group">
              <button class="btn btn-primary" type="submit">送出</button>
            </div>
          </form>
@endsection
