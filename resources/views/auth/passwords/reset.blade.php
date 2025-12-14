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
    <title>Create New Password | Rezon Security Bank</title>
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

    .password-strength {
        height: 5px;
        margin-top: 5px;
        border-radius: 2px;
    }

    .strength-weak {
        background-color: #dc3545;
        width: 25%;
    }

    .strength-fair {
        background-color: #ffc107;
        width: 50%;
    }

    .strength-good {
        background-color: #28a745;
        width: 75%;
    }

    .strength-strong {
        background-color: #20c997;
        width: 100%;
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
                            <h3 class="nk-block-title">Create New Password</h3>
                            <div class="nk-block-des alert alert-pro alert-primary">
                                <p class="alert-text">Please enter your new password below.</p>
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

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="email">Email Address</label>
                            </div>
                            <input type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" readonly
                                placeholder="Your email address">

                            @error('email')
                            <script>
                                toastr.error('{{ $message }}');
                            </script>
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">New Password</label>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch"
                                    data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    id="password" name="password" required autocomplete="new-password"
                                    placeholder="Enter new password" onkeyup="checkPasswordStrength(this.value)">
                            </div>
                            <div id="password-strength" class="password-strength"></div>
                            @error('password')
                            <script>
                                toastr.error('{{ $message }}');
                            </script>
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password-confirm">Confirm New Password</label>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch"
                                    data-target="password-confirm">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" id="password-confirm"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm new password">
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" id="reset-btn">
                                Reset Password
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
                                    <h4>Password Requirements</h4>
                                    <p>Your new password must be at least 8 characters long and include a mix of
                                        uppercase letters, lowercase letters, numbers, and symbols.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('account/images/banking.svg') }}" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Security Tips</h4>
                                    <p>• Don't reuse old passwords<br>
                                        • Avoid personal information<br>
                                        • Use a unique password for your bank account<br>
                                        • Consider using a password manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('account/images/onlinebanking.svg') }}" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Password Updated</h4>
                                    <p>Once you reset your password, you'll be redirected to the login page. Use your
                                        new password to access your account securely.</p>
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
        function checkPasswordStrength(password) {
            var strengthBar = document.getElementById('password-strength');
            var strength = 0;
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]+/)) strength++;
            if (password.match(/[A-Z]+/)) strength++;
            if (password.match(/[0-9]+/)) strength++;
            if (password.match(/[$@#&!]+/)) strength++;
            
            // Remove all classes
            strengthBar.className = 'password-strength';
            
            if (password.length === 0) {
                strengthBar.style.width = '0%';
            } else if (strength < 2) {
                strengthBar.className += ' strength-weak';
            } else if (strength === 2 || strength === 3) {
                strengthBar.className += ' strength-fair';
            } else if (strength === 4) {
                strengthBar.className += ' strength-good';
            } else if (strength === 5) {
                strengthBar.className += ' strength-strong';
            }
        }

        $(document).ready(function() {
            // Password visibility toggle
            $('.passcode-switch').on('click', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                var input = $('#' + target);
                var icon = $(this).find('.passcode-icon');
                
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('icon-show').addClass('icon-hide');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('icon-hide').addClass('icon-show');
                }
            });

            // Form validation
            $('form').on('submit', function() {
                var password = $('#password').val();
                var confirmPassword = $('#password-confirm').val();
                
                if (password !== confirmPassword) {
                    toastr.error('Passwords do not match!');
                    return false;
                }
                
                if (password.length < 8) {
                    toastr.error('Password must be at least 8 characters long!');
                    return false;
                }
                
                $('#reset-btn').prop('disabled', true).html('Resetting...');
            });

            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}');
                @endforeach
            @endif
        });
    </script>
</body>

</html>