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
                @foreach ($series as $oneSeries)
                  <tr>
                    <td>{{ $oneSeries->name }}</td>
                    <td>{{ $oneSeries->origin_name }}</td>
                    <td>
                      {{ $oneSeries->authors->implode('name', '＼') }}
                    </td>
                    <td>{{ $oneSeries->brand->name }}</td>
                    <td>{{ $oneSeries->desc }}</td>
                    <td>
                      {{ $oneSeries->categories->implode('name', '＼') }}
                    </td>
                    <td>
                      {{ $oneSeries->tags->implode('name', '＼') }}
                    </td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('series.edit', $oneSeries->id) }}">修改</a></td>
                    <td>
                      <form action="{{ route('series.destroy', $oneSeries->id) }}" method="POST">
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

