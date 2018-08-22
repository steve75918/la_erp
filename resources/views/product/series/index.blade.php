@extends('product.layouts.master')

@section('title', 'Series 管理 - 首頁')

@section('sidebar')
  @parent
@endsection

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h2>Series</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('series.create') }}">新增</a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>中文名稱</th>
                  <th>原文名稱</th>
                  <th>作者</th>
                  <th>出版社</th>
                  <th>簡介</th>
                  <th>分類</th>
                  <th>標籤</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($series as $oneseries)
                  <tr>
                    <td>{{ $oneseries->name }}</td>
                    <td>{{ $oneseries->origin_name }}</td>
                    <td>
                      @foreach ($oneseries->authors as $key => $author)
                        @if ($key >= 1)
                          ＼
                        @endif
                        {{ $author->name }}
                      @endforeach
                    </td>
                    <td>{{ $oneseries->brand->name }}</td>
                    <td>{{ $oneseries->desc }}</td>
                    <td>
                      @foreach ($oneseries->categories as $key => $category)
                        @if ($key >= 1)
                          ＼
                        @endif
                        {{ $category->name }}
                      @endforeach
                    </td>
                    <td>
                      @foreach ($oneseries->tags as $key => $tag)
                        @if ($key >= 1)
                          ＼
                        @endif
                        {{ $tag->name }}
                      @endforeach
                    </td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('series.edit', $oneseries->id) }}">修改</a></td>
                    <td>
                      <form action="{{ route('series.destroy', $oneseries->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="submit">刪除</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {{ $series->links() }}
          </div>
@endsection

