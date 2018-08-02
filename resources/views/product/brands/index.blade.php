@extends('product.layouts.master')

@section('title', '發行商管理 - 首頁')

@section('sidebar')
  @parent
@endsection

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h2>發行商清單</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('brands.create') }}">新增</a>
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
                @foreach ($brands as $brand)
                  <tr>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->origin_name }}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('brands.edit', $brand->id) }}">修改</a></td>
                    <td>
                      <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-primary btn-sm" type="submit">刪除</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {{ $brands->links() }}
          </div>
@endsection
