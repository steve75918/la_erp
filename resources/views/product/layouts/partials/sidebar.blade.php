        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('publishers.index') }}">
                  出版社管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('brands.index') }}">
                  發行商管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('authors.index') }}">
                  作者管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('types.index') }}">
                  作品種類管理
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">
                  作品類別管理
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  書籍管理
                </a>
              </li> --}}
            </ul>
          </div>
        </nav>
