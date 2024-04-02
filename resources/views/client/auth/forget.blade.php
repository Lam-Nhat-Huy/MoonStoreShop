@extends('client.master')

@section('title', 'Quên mật khẩu')

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
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" style="background-color: #000000;" id="tab-login"
                                data-mdb-toggle="pill" href="{{ route('login.index') }}" role="tab"
                                aria-controls="pills-login" aria-selected="true">Forget Password</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <p class="mb-4">Enter the email address associated with your account and we will send you a
                                link to reset
                                your password</p>
                            <form method="POST" action="{{ route('forget.post') }}">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="Type email" />
                                    @error('email')
                                        <label id="firstname-error" class="error mt-2 text-danger"
                                            for="firstname">{{ $message }}</label>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-dark btn-block mb-4">Send mail</button>

                                <div class="text-center">
                                    <p>Return to the login page? <a href="{{ route('login.index') }}"
                                            class="text-decoration-none text-primaray">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>


@endsection
