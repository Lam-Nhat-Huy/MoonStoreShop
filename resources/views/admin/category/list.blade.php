@extends('admin.master')

@section('title', 'Category Management')

@section('main-content')

    <style>
        .page-link {
            color: #000000
        }

        .page-item.active .page-link {
            background-color: #000000;
            border-color: #000000;
        }
    </style>



    <div class="main-panel">
        <div class="col-lg-12 grid-margin stretch-card">
            @if ($message = Session::get('success'))
                <script>
                    Toastify({
                        text: "{{ $message }}",
                        duration: 10000,
                        destination: "https://github.com/apvarun/toastify-js",
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "center",
                        stopOnFocus: true,
                        offset: {
                            y: 40
                        },
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                        onClick: function() {}
                    }).showToast();
                </script>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Category Manage</h4>
                        <form action="{{ route('category.search') }}" method="GET">
                            <div class="form-group">
                                <div class="nav-search">
                                    <div class="input-group">
                                        <input type="text" style="border: 0.1px solid #000;" class="form-control"
                                            placeholder="Type to search..." aria-label="search" name="search"
                                            value="" aria-describedby="search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" id="search">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Category</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{!! $item->status
                                            ? '<span class="text-success">Hiển thị</span>'
                                            : '<span class="text-danger">Không hiển thị</span>' !!}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('category.edit', $item) }}"
                                                class="btn btn-outline-success btn-sm mr-2"><i
                                                    class="typcn typcn-edit menu-icon"></i></a>
                                            <form action="{{ route('category.destroy', $item) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm"> <i
                                                        class="typcn typcn-trash menu-icon"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Không có dữ liệu, vui lòng click vào đây để
                                            thêm danh mục mới, <a class="text-primary"
                                                href="{{ route('category.create') }}">Thêm mới</a></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- Phân trang sản phẩn  --}}
                        <div class="text-center mt-2">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    @if ($categories->onFirstPage())
                                        <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link"
                                                href="{{ $categories->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                                    @endif

                                    {{-- Lặp qua các trang --}}
                                    @for ($i = 1; $i <= $categories->lastPage(); $i++)
                                        <li class="page-item {{ $categories->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $categories->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($categories->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $categories->nextPageUrl() }}"
                                                rel="next">&raquo;</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
