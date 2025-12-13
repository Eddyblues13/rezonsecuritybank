@include('dashboard.header')
<div class="nk-wrap ">
    <!-- main header @s -->
    <div class="nk-header nk-header-fluid nk-header-fixed is-secondary">
        <div class="container-fluid">
            <div class="nk-header-wrap">
                <div class="nk-menu-trigger d-xl-none ml-n1">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                            class="icon ni ni-menu"></em></a>
                </div>
                <div class="nk-header-brand d-xl-none">
                    <a href="#" class="logo-link">
                        <img class="logo-light logo-img" src="{{asset('dash/logo.png')}}"
                            srcset="{{asset('dash/logo.png')}}" alt="logo">
                        <img class="logo-dark logo-img" src="{{asset('dash/logo.png')}}"
                            srcset="{{asset('dash/logo.png')}}" alt="logo-dark">

                    </a>
                </div>
                <div class="nk-header-news d-none d-xl-block">
                    <div class="nk-news-list">
                        <a class="nk-news-item" href="#">
                            <div class="nk-news-icon">
                                <em class="icon ni ni-card-view"></em>
                            </div>
                            <div class="nk-news-text">
                                <p>Do you know the latest update of Covid 2019? <span> An overview of ours is now
                                        available here.</span></p>
                                <em class="icon ni ni-external"></em>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="nk-header-tools">
                    <ul class="nk-quick-nav">
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="user-toggle">
                                    <div class="user-avatar sm">
                                        <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info d-none d-md-block">
                                        <div class="user-status user-status-verified">Connected</div>
                                        <div class="user-name dropdown-indicator">{{Auth::user()->first_name}}
                                            {{Auth::user()->middle_name}} {{Auth::user()->last_name}}</div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                    <div class="user-card">
                                        <div class="user-avatar">
                                            <span>BE</span>
                                        </div>
                                        <div class="user-info">
                                            <span class="lead-text">{{Auth::user()->first_name}}
                                                {{Auth::user()->middle_name}} {{Auth::user()->last_name}}</span>
                                            <span class="sub-text">{{Auth::user()->account_number}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-inner user-account-info">
                                    <h6 class="overline-title-alt">Business Account</h6>
                                    <div class="user-balance"> 0 <small class="currency currency-btc">NLG</small></div>
                                    <div class="user-balance-sub">Local <span>{{number_format($balance, 2)}} <span
                                                class="currency currency-btc">{{Auth::user()->currency}}</span></span>
                                    </div>
                                    <a href="{{route('transfer')}}" class="link"><span>Transfer Funds</span> <em
                                            class="icon ni ni-wallet-out"></em></a>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="profile"><em class="icon ni ni-user-alt"></em><span>View
                                                    Profile</span></a></li>
                                        <li><a href="account-setting"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="{{route('reset_password')}}"><em
                                                    class="icon ni ni-security"></em><span>Reset Password</span></a>
                                        </li>
                                        <li><a href="{{route('activity_log')}}"><em
                                                    class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                        </li>
                                        <li><a href="dark"><em class="icon ni ni-moon "></em><span> Enable Dark
                                                    mode</span></a></li>

                                    </ul>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="{{route('logout')}}"><em class="icon ni ni-signout"></em><span>Sign
                                                    out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- main header @e -->
    <div class="nk-content nk-content-fluid">
        <div class="card card-bordered">
            <div class="card-header font-weight-bold text-light" style="background-color:#1A4DBE;">Security Setting
            </div>
            <div class="card-inner">
                <h5 class="card-title">Reset/Change your REZON SECURITY BANK account password*</h5>
                <hr>
                <script>
                    if ("session('error')") {
        var errorMessage = "session('error')";
        toastr.error(errorMessage);
    }
        elseif("session('success')") {
        var errorMessage = "session('sucess')";
        toastr.success(errorMessage);
       
     
    }
                </script>
                <form class="buysell-form" id='reset_password'>
                    @csrf
                    <!-- .buysell-field -->
                    <div class="buysell-field form-group row">
                        <div class="col-lg-12 col-sm-12 p-2">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-lock-fill"></em>
                                    </div>
                                    <input type="password" class="form-control form-control-xl form-control-outlined"
                                        id="old_password" name="old_password">
                                    <label class="form-label-outlined" for="outlined-right-icon">Current
                                        Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 p-2">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-security"></em>
                                    </div>
                                    <input type="password" class="form-control form-control-xl form-control-outlined"
                                        id="new_password" name="new_password">
                                    <label class="form-label-outlined" for="outlined-right-icon">New password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 p-2">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-security"></em>
                                    </div>
                                    <input type="password" class="form-control form-control-xl form-control-outlined"
                                        id="new_password_confirmation" name="new_password_confirmation">
                                    <label class="form-label-outlined" for="outlined-right-icon">Confirm New
                                        Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="cardResult"></div>
                        <div class="col-lg-12 col-sm-12 p-2">
                            <div class="form-group">
                                <button class="btn btn-primary btn-block cardBtn" type="submit">Reset Password</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- .buysell-form -->
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
                    $('.cardBtn').on('click', function() {
                        var $this = $(this);
                        var loadingText = '<i class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></i>&nbsp;Processing...';
                        if ($(this).html() !== loadingText) {
                            $this.data('original-text', $(this).html());
                            $this.html(loadingText);
                        }
                        setTimeout(function() {
                            $this.html($this.data('original-text'));
                        }, 3000);
                    });
                })
        $(document).ready(function() {
        $('#reset_password').on('submit', function(e) {
            e.preventDefault();
            var old_password = $('#old_password').val();
            var new_password = $('#new_password').val();
            var new_password_confirmation = $('#new_password_confirmation').val();
            $.ajax({
                type: "POST",
                url: '{{ route("change.password") }}',
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    $('.logout').html(data.content);
                    if (data.content === 'success') {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        };
                        toastr.success("Verification Successful",  "Verified",);
                        window.location.href = '../login';
                    } else if (data.content === 'error') {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        };
                        toastr.error("Invalid Code Supplied",  "Error");
                        window.location.href = data.redirect;
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    Swal.fire('The Internet?', 'Check network connection!', 'question');
                }
            });
        });

        $("#someDiv").hide();
        setInterval(function() {
            $("#someDiv").fadeIn(1000).fadeOut(2500);
        }, 0);
    });
    </script>

    <!-- footer @e -->
</div>

@include('dashboard.footer')