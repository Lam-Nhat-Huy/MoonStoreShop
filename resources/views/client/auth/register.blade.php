@extends('client.master')

@section('title', 'Trang đăng nhập')

@section('main-content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92"
        style="background-image: url('https://file.hstatic.net/200000312481/file/polo_aaf8947f65484e6c9dec8d63d72e266c.jpg')">
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="{{ route('login.index') }}"
                                role="tab" aria-controls="pills-login" style="color: #000;"
                                aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" style="background-color: #000000;" id="tab-register"
                                data-mdb-toggle="pill" href="{{ route('register.index') }}" role="tab"
                                aria-controls="pills-register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                            <form method="POST" action="{{ route('register.post') }}">
                                @csrf
                                <!-- Name input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Full Name</label>
                                    <input type="text" id="loginName" name="name" class="form-control"
                                        value="{{ old('name') }}" />
                                    @error('name')
                                        <label id="firstname-error" class="error mt-2 text-danger"
                                            for="firstname">{{ $message }}</label>
                                    @enderror
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginEmail">Email</label>
                                    <input type="email" id="loginEmail" name="email" class="form-control"
                                        value="{{ old('email') }}" />
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

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword">Confirm Password</label>
                                    <input type="password" id="loginPassword" name="confirm-password"
                                        class="form-control" />
                                    @error('confirm-password')
                                        <label id="firstname-error" class="error mt-2 text-danger"
                                            for="firstname">{{ $message }}</label>
                                    @enderror
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-dark btn-block mb-4">Register</button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>You have an account? <a href=""
                                            class="text-decoration-none text-dark">Login</a></p>
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
