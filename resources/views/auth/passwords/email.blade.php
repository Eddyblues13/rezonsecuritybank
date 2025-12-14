<!DOCTYPE html>
<html lang="en-US" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.">
    <link rel="shortcut icon" href="{{ asset('account/images/favicon.jpeg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('account/images/favicon.jpeg') }}">
    <title>Reset Password | Rezon Security Bank</title>
    <link rel="stylesheet" href="{{ asset('account/assets/css/dashlite.css?ver=2.4.0') }}">
    <link rel="stylesheet" href="{{ asset('account/scss/sweetalert.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('account/assets/css/theme.css?ver=2.4.0') }}">
    <link href="{{ asset('account/css/toastr.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dash/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets1/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets1/css/theme.css') }}">
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js') }}"></script>
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css') }}"
        rel="stylesheet">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') }}">
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js') }}"></script>
</head>

<style type="text/css">
    .btn-primary {
        background-color: #033d75;
    }

    .btn-primary:hover {
        opacity: 0.6;
    }

    .btn-secondary {
        background-color: #d13636;
    }

    .btn-secondary:hover {
        opacity: 0.6;
    }
</style>

<body class="nk-body npc-crypto bg-white pg-auth">
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo">
                        <em class="icon ni ni-info"></em>
                    </a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="/" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('dash/logo.png') }}" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('dash/logo.png') }}"
                                alt="logo-dark">
                        </a>
                    </div>

                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title">Reset Password</h3>
                            <div class="nk-block-des alert alert-pro alert-primary">
                                <p class="alert-text">Enter your email address to receive a password reset link.</p>
                            </div>
                        </div>
                    </div>

                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="email">Email Address</label>
                            </div>
                            <input type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter your email address">

                            @error('email')
                            <script>
                                toastr.error('{{ $message }}');
                            </script>
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                Send Password Reset Link
                            </button>
                        </div>

                        <div class="form-group text-center">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-secondary">
                                <em class="icon ni ni-arrow-left"></em> Back to Login
                            </a>
                        </div>
                    </form>
                </div>

                <div class="nk-block nk-auth-footer">
                    <div class="mt-3">
                        <p>&copy; 2024 Rezon Security Bank. All Rights Reserved.</p>
                    </div>
                </div>
            </div>

            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('account/images/security.svg') }}" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Secure Password Reset</h4>
                                    <p>We ensure that your password reset process is secure and encrypted. The reset
                                        link will expire after 60 minutes for your security.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('account/images/banking.svg') }}" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Check Your Email</h4>
                                    <p>After submitting your email, check your inbox for the password reset link. If you
                                        don't see it, check your spam folder.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('account/images/onlinebanking.svg') }}" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Quick & Easy</h4>
                                    <p>Reset your password quickly and get back to managing your accounts securely with
                                        Rezon Security Bank.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('account/assets/js/bundle.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('account/assets/js/scripts.js?ver=2.4.0') }}"></script>

    <script>
        $(document).ready(function() {
            @if(session('status'))
                toastr.success('{{ session('status') }}');
            @endif
        });
    </script>
</body>

</html>