@extends('client.master')

@section('title', 'Trang cá nhân')

@section('main-content')
    @if ($message = Session::get('success'))
        <script>
            Toastify({
                text: "{{ $message }}",
                duration: 100000,
                destination: "https://github.com/apvarun/toastify-js",
                newWindow: true,
                close: true,
                gravity: "bottom",
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
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url('https://file.hstatic.net/200000312481/file/polo_aaf8947f65484e6c9dec8d63d72e266c.jpg">
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row flex-lg-nowrap">
                <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                    <div class="card p-3">
                        <div class="e-navlist e-navlist--active-bg">
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link px-2 active text-dark" href="#"><i
                                            class="fa fa-fw fa-user mr-1"></i><span>Profile</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="e-profile">
                                        <div class="row">
                                            <div class="col-12 col-sm-auto mb-3">
                                                <div class="mx-auto" style="width: 140px;">
                                                    <img src="{{ asset($users->avatar) }}" alt="Ảnh"
                                                        style="height: 140px; width: 140px; object-fit: cover; border-radius: 50%;">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $users->name }}</h4>
                                                    <div class="mt-2">
                                                        <button class="btn btn-success btn-sm" type="button">
                                                            <i class="fa fa-fw fa-user"></i>
                                                            <span>Khách hàng thân thiết</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">
                                                <form class="form" action="{{ route('profile.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="{{ $users->id }}">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Username</label>
                                                                        <input class="form-control" type="text"
                                                                            name="username" value="{{ $users->name }}">
                                                                        @error('username')
                                                                            <label id="firstname-error"
                                                                                class="error mt-2 text-danger"
                                                                                for="firstname">{{ $message }}</label>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="formFileMultiple"
                                                                            class="form-label">Avatar</label>
                                                                        <input class="form-control" name="avatar"
                                                                            type="file" id="formFileMultiple" multiple
                                                                            value="{{ $users->avatar }}" />
                                                                        @error('avatar')
                                                                            <label id="firstname-error"
                                                                                class="error mt-2 text-danger"
                                                                                for="firstname">{{ $message }}</label>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Email</label>
                                                                        <input class="form-control" type="text"
                                                                            value="{{ $users->email }}" name="email">
                                                                        @error('email')
                                                                            <label id="firstname-error"
                                                                                class="error mt-2 text-danger"
                                                                                for="firstname">{{ $message }}</label>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-end">
                                                            <button class="btn btn-secondary" type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 mb-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="px-xl-3">
                                        <a href="{{ route('logout.index') }}" class="btn btn-block btn-secondary">
                                            <i class="fa fa-sign-out"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title font-weight-bold">Support</h6>
                                    <p class="card-text">Get fast, free help from our friendly assistants.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
