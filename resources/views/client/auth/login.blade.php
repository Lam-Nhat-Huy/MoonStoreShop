@extends('client.master')

@section('title', 'Đăng nhập')

@section('main-content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url('https://file.hstatic.net/200000312481/file/polo_aaf8947f65484e6c9dec8d63d72e266c.jpg">
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" style="background-color: #000000;" id="tab-login"
                                data-mdb-toggle="pill" href="{{ route('login.index') }}" role="tab"
                                aria-controls="pills-login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-register" style="color: #000;" data-mdb-toggle="pill"
                                href="{{ route('register.index') }}" role="tab" aria-controls="pills-register"
                                aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                            <form method="POST" action="{{ route('login.post') }}">
                                @csrf
                                <div class="text-center mb-3">
                                    <p>Login with:</p>
                                    <button type="button" class="btn btn-dark btn-floating mx-1">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </button>

                                    <a href="auth/redirect" type="button" class="btn btn-dark btn-floating mx-1">
                                        <i class="zmdi zmdi-google"></i>
                                    </a>

                                </div>

                                <p class="text-center">Or:</p>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Email</label>
                                    <input type="email" id="loginName" class="form-control" name="email"
                                        value="{{ old('name') }}" />
                                    @error('email')
                                        <label id="firstname-error" class="error mt-2 text-danger"
                                            for="firstname">{{ $message }}</label>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword">Password</label>
                                    <input type="password" id="loginPassword" name="password" class="form-control" />
                                    @error('password')
                                        <label id="firstname-error" class="error mt-2 text-danger"
                                            for="firstname">{{ $message }}</label>
                                    @enderror
                                </div>

                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check mb-3 mb-md-0">
                                            <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                                checked />
                                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 d-flex justify-content-center">
                                        <!-- Simple link -->
                                        <a href="{{ route('auth.forget') }}" class="text-decoration-none">Forgot
                                            password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-dark btn-block mb-4">Login</button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>You don't have an acount? <a href=""
                                            class="text-decoration-none text-primaray">Register</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Pills content -->
                </div>
            </div>
        </div>
    </section>


@endsection
