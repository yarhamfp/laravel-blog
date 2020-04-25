<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Register - BakeBlog</title>
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
                        <div class="col-xl-8 col-lg-9">
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 font-weight-light mb-3">Create an Account</div>
                                    <div class="small text-muted mb-2">Sign in using...</div>
                                    <a class="btn btn-icon btn-facebook mx-1" href="#"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a><a class="btn btn-icon btn-github mx-1" href="#"><i class="fab fa-github fa-fw fa-sm"></i></a><a class="btn btn-icon btn-google mx-1" href="#"><i class="fab fa-google fa-fw fa-sm"></i></a><a class="btn btn-icon btn-twitter mx-1" href="#"><i class="fab fa-twitter fa-fw fa-sm"></i></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <div class="text-center small text-muted mb-4">...or enter your information below.</div>
                                    <form action="{{route('register')}}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="firstNameExample">Name</label>
                                                    <input class="form-control form-control-solid py-4 @error('name') is-invalid @enderror" name="name" type="text" placeholder aria-label="First Name" aria-describedby="firstNameExample" value="{{ old('name') }}" />
                                                    @error('name')
                                                        <span class="text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="lastNameExample">Username</label>
                                                    <input class="form-control form-control-solid py-4" type="text" placeholder aria-label="username" aria-describedby="lastNameExample" value="{{ old('username') }}" required />
                                                    @error('username')
                                                        <span class="text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="emailExample">Email address</label>
                                            <input class="form-control form-control-solid py-4 @error('email') is-invalid @enderror" type="email" placeholder aria-label="Email Address" aria-describedby="emailExample" name="email" value="{{ old('email') }}" />
                                            @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="passwordExample">Password</label>
                                                    <input class="form-control form-control-solid py-4 @error('password') is-invalid @enderror" type="password" placeholder aria-label="Password" name="password" aria-describedby="passwordExample" />
                                                    @error('password')
                                                        <span class="text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="confirmPasswordExample">Confirm Password</label>
                                                    <input class="form-control form-control-solid py-4" type="password" name="password_confirmation" placeholder aria-label="Confirm Password" aria-describedby="confirmPasswordExample" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <div class="custom-control custom-control-solid custom-checkbox">
                                                <input class="custom-control-input small" id="customCheck1" type="checkbox" required/><label class="custom-control-label mr-3" for="customCheck1">I accept the <a href="#">terms &amp; conditions</a>.</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">Have an account? <a href="{{url('login')}}">Sign in!</a></div>
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




