@extends('product.layouts.master')

@section('title', '出版社管理 - 首頁')

@section('sidebar')
  @parent
@endsection

@section('content')
          <h2>出版社清單</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>中文名稱</th>
                  <th>日文名稱</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($publishers as $publisher)
                  <tr>
                    <td>{{ $publisher->name }}</td>
                    <td>{{ $publisher->origin_name }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {{ $publishers->links() }}
          </div>
@endsection
