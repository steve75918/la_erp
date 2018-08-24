@extends('product.layouts.master')

@section('title', 'Book 管理 - 首頁')

@section('sidebar')
  @parent
@endsection

@section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h2>Book 清單</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('books.create') }}">新增</a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Series ID</th>
                  <th>Book ID</th>
                  <th>Series 名稱</th>
                  <th>Book 中文名稱</th>
                  <th>Book 日文名稱</th>
                  <th>簡介</th>
                  <th>48 小時</th>
                  <th>永久</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($books as $book)
                  <tr>
                    <td>{{ $book->series->series_id }}</td>
                    <td>{{ $book->book_id }}</td>
                    <td>{{ $book->series->name }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->origin_name }}</td>
                    <td>{{ $book->desc }}</td>
                    <td>{{ $book->cost_48hr }}</td>
                    <td>{{ $book->cost_limitless }}</td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('books.edit', $book->id) }}">修改</a></td>
                    <td>
                      <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger btn-sm" type="submit">刪除</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {{ $books->links() }}
          </div>
@endsection
