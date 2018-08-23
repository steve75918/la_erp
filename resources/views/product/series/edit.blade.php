@extends('product.layouts.master')

@section('title', 'Series 管理 - 編輯')

@section('sidebar')
  @parent
@endsection

@section('content')
          <form method="POST" action="{{ route('series.update', $series->id) }}">
            <div class="form-group">
              <label for="name">中文名稱</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $series->name }}">
            </div>

            <div class="form-group">
              <label for="origin_name">原文名稱</label>
              <input type="text" class="form-control" name="origin_name" id="origin_name" value="{{ $series->origin_name }}">
            </div>

            <div class="form-group">作者</div>
            @foreach ($authors as $author)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $author->id }}" name="author_ids[]" value="{{ $author->id }}" {{ ($series->authors->pluck('id')->contains($author->id))? 'checked':'' }}>
              <label class="form-check-label" for="inlineCheckbox{{ $author->id }}">{{ $author->name }}</label>
            </div>
            @endforeach

            <div class="form-group">
              <label for="brand_id">出版社</label>
              <select class="form-control" name="brand_id" id="brand_id">
                <option value="" selected disabled hidden>請選擇出版社</option>
                @foreach ($brands as $brand)
                  <option value="{{ $brand->id }}" {{ ($series->brand_id === $brand->id)? 'selected': '' }}>{{ $brand->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="desc">簡介</label>
              <input type="textfield" class="form-control" name="desc" id="desc" value="{{ $series->desc }}">
            </div>

            <div class="form-group">
              <label for="categories_id">類別</label>
              <select class="form-control" name="category_ids" id="categories_id">
                <option value="" selected disabled hidden>請選擇類別</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ ($series->categories->pluck('id')->contains($category->id))? 'selected':'' }}>{{ $category->prefixed_name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">標籤</div>
            @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $tag->id }}" name="tag_ids[]" value="{{ $tag->id }}" {{ ($series->tags->pluck('id')->contains($tag->id))? 'checked':'' }}>
              <label class="form-check-label" for="inlineCheckbox{{ $tag->id }}">{{ $tag->name }}</label>
            </div>
            @endforeach

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button class="btn btn-primary" type="submit">送出</button>
          </form>
@endsection
