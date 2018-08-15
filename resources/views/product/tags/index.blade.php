@extends('product.layouts.master')

@section('title', '作品標籤管理 - 首頁')

@section('sidebar')
  @parent
@endsection

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h2>作品標籤清單</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('tags.create') }}">新增</a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>中文名稱</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tags as $tag)
                  <tr>
                    <td>{{ $tag->name }}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('tags.edit', $tag->id) }}">修改</a></td>
                    <td>
                      <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="submit">刪除</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {{ $tags->links() }}
          </div>
@endsection
