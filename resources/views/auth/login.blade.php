<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Login - BakeBlog</title>
    <link href="{{ url('backend/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ url('backend/assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer
        src="{{ url('backend/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('backend/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js') }}" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 font-weight-light mb-3">Sign In</div>
                                    <a class="btn btn-icon btn-facebook mx-1" href="#"><i
                                            class="fab fa-facebook-f fa-fw fa-sm"></i></a><a
                                        class="btn btn-icon btn-github mx-1" href="#"><i
                                            class="fab fa-github fa-fw fa-sm"></i></a><a
                                        class="btn btn-icon btn-google mx-1" href="#"><i
                                            class="fab fa-google fa-fw fa-sm"></i></a><a
                                        class="btn btn-icon btn-twitter mx-1" href="#"><i
                                            class="fab fa-twitter fa-fw fa-sm"></i></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-gray-600 small"for="emailExample">Email address</label>
                                                <input
                                                class="form-control form-control-solid py-4 @error('email') is-invalid @enderror" name="email" type="email" placeholder
                                                aria-label="Email Address" aria-describedby="emailExample" value="{{old('email')}}" />
                                                @error('email')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small"for="passwordExample">Password</label>
                                                <input
                                                class="form-control form-control-solid py-4 @error('password') is-invalid @enderror" type="password" placeholder
                                                aria-label="Password" name="password" aria-describedby="passwordExample" />
                                                @error('password')
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            @if (Route::has('password.request'))
                                                <a class="small" href="{{ route('password.request') }}">
                                                    Forgot your password?
                                                </a>
                                            @endif
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                            <div class="custom-control custom-control-solid custom-checkbox">
                                                <input
                                                    class="custom-control-input small" id="customCheck1"
                                                    type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} />
                                                    <label class="custom-control-label"for="customCheck1">Remember password</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">New user? <a href="{{url('register')}}">Create an
                                            account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ url('backend/code.jquery.com/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('backend/stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous">
    </script>
    <script src="{{ url('backend/js/scripts.js') }}"></script>

    <script src="{{ url('backend/js/sb-customizer.js') }}"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer>
</body>
</html>

