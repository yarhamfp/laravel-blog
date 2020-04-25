<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/password-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Apr 2020 16:29:32 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Forgot Password - SB Admin Pro</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="../../cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                                <div class="card my-5">
                                    <div class="card-body p-5 text-center"><div class="h3 font-weight-light mb-0">Password Recovery</div></div>
                                    <hr class="my-0" />
                                    <div class="card-body p-5">
                                        <div class="text-center small text-muted mb-4">Enter your email address below and we will send you a link to reset your password.</div>
                                        <form>
                                            <div class="form-group"><label class="text-gray-600 small" for="emailExample">Email address</label><input class="form-control form-control-solid py-4" type="text" placeholder aria-label="Email Address" aria-describedby="emailExample" /></div>
                                            <div class="form-group mb-0"><a class="btn btn-primary" href="login-social.html">Reset Password</a></div>
                                        </form>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body px-5 py-4">
                                        <div class="small text-center">New user? <a href="register-social.html">Create an account!</a></div>
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
        <script src="{{ url('backend/stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ url('backend/js/scripts.js') }}"></script>

        <script src="{{ url('backend/js/sb-customizer.js') }}"></script>
        <sb-customizer project="sb-admin-pro"></sb-customizer>
    </body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/password-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Apr 2020 16:29:32 GMT -->
</html>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
