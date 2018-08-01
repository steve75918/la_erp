@extends('product.layouts.master')

@section('title', '出版社管理 - 首頁')

@section('sidebar')
  @parent
@endsection

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h2>出版社清單</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('publishers.create') }}">新增</a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>中文名稱</th>
                  <th>日文名稱</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($publishers as $publisher)
                  <tr>
                    <td>{{ $publisher->name }}</td>
                    <td>{{ $publisher->origin_name }}</td>
                    <td><a href="{{ route('publishers.edit', $publisher->id) }}">修改</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {{ $publishers->links() }}
          </div>
@endsection
