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
                                    <a href="transfer" class="link"><span>Transfer Funds</span> <em
                                            class="icon ni ni-wallet-out"></em></a>
                                </div>
                                <div class="dropdown-inner">
                                    <ul class="link-list">
                                        <li><a href="profile"><em class="icon ni ni-user-alt"></em><span>View
                                                    Profile</span></a></li>
                                        <li><a href="account-setting"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="password-reset"><em class="icon ni ni-security"></em><span>Reset
                                                    Password</span></a></li>
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
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub">
                    </div>
                    <div class="nk-block-between-md g-4 card-bordered">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title fw-normal">Internet Banking Check Deposit.</h4>
                            <div class="nk-block-des">
                                <p>you can deposit checks by snapping pictures of the front and back of the check.</p>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools gx-3">
                                <li><a href="transfer" class="btn btn-secondary text-light"><span>Transfer
                                            Fund</span><em class="icon ni ni-wallet-out"></em></a></li>
                            </ul>

                        </div>
                        <!-- .nk-block-head-content -->
                    </div>
                    <!-- .nk-block-between -->
                </div>
                <!-- .nk-block-head -->
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-header font-weight-bold text-light" style="background-color:#1A4DBE;">Deposit a check</div>
            <div class="card-inner">
                <h5 class="card-title">Check Deposit tips</h5>
                <p class="card-text"><em class="icon ni ni-alert-circle text-danger"
                        style="font-size: 18px; font-weight: 600;"></em> Choose the account to deposit the check and the
                    check amount.</p>
                <p class="card-text"><em class="icon ni ni-alert-circle text-danger"
                        style="font-size: 18px; font-weight: 600;"></em> Ensure the check has been properly endorsed and
                    that it is flat, on a dark, well-lit surface. Then snap pictures of both the front
                    and back of the check, keeping it in the correct parameters. Don’t forget to endorse and write ‘for
                    mobile deposit only’ on the back.
                </p>
                <p class="card-text"><em class="icon ni ni-alert-circle text-danger"
                        style="font-size: 18px; font-weight: 600;"></em> Submit your check for deposit! We’ll send you
                    an email confirmation that we’ve received your deposit and an email confirmation once
                    it is accepted. Be sure to hold on to your check until you receive this confirmation, once received,
                    destroy the check!
                </p>
                <hr>
                <form action="{{route('make_deposit')}}" method="post" class="buysell-form"
                    enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="buysell-field form-group">
                        <div class="form-label-group">
                            <label class="form-label">Select Account</label>
                        </div>
                        <div class="dropdown buysell-cc-dropdown">
                            <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                <div class="coin-item coin-btc">
                                    <div class="coin-icon">
                                        <em class="icon ni ni-sign-{{Auth::user()->currency}}"></em>
                                    </div>
                                    <div class="coin-info">
                                        <span class="coin-name">Business Account ({{Auth::user()->currency}})</span>
                                        <span class="coin-text">Available Balance: {{Auth::user()->currency}}
                                            {{number_format($balance, 2)}}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                <ul class="buysell-cc-list">
                                    <li class="buysell-cc-item selected">
                                        <a href="#" class="buysell-cc-opt" data-currency="btc">
                                            <div class="coin-item coin-btc">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-sign-{{Auth::user()->currency}}"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">Business Account
                                                        ({{Auth::user()->currency}})</span>
                                                    <span class="coin-text">Available Balance:
                                                        {{Auth::user()->currency}} {{number_format($balance, 2)}}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- .dropdown-menu -->
                        </div>
                        <!-- .dropdown -->
                    </div>
                    <!-- .buysell-field -->
                    <div class="buysell-field form-group">
                        <div class="result"></div>
                        <div class="form-label-group"> <label class="form-label" for="buysell-amount">Check
                                Amount</label> </div>
                        <div class="form-control-group">
                            <input type="number" class="form-control form-control-lg form-control-number" id="amount"
                                name="amount" placeholder="2000">
                            <div class="form-dropdown">
                                <div class="text">{{Auth::user()->currency}}<span></span></div>
                            </div>
                        </div>
                        <div class="form-note-group"> <span class="buysell-min form-note-alt"></span> <span
                                class="buysell-rate form-note-alt">You can deposit upto {{Auth::user()->currency}} for
                                each federal check</span> </div>
                    </div>
                    <!-- .buysell-field -->
                    <div class="buysell-field form-group row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="customFileLabel">Front of the check</label>
                            <div class="col-md-12 p-0">
                                <img class="img-responsive" id="output_imageB" src="dash/img/size.jpg"
                                    style="width:100%; height:130px">
                            </div>
                            <p class="clear-fix"></p>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" name="front_check" class="custom-file-input" id="fileTag"
                                        accept="image/*" onchange="preview_imageB(event)">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="customFileLabel">Back of the check</label>
                            <div class="col-md-12 p-0">
                                <img class="img-responsive" id="output_image" src="dash/img/size.jpg"
                                    style="width:100%; height:130px">
                            </div>
                            <p class="clear-fix"></p>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="back_check" accept="image/*"
                                        onchange="preview_image(event)">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <script type='text/javascript'>
                            function preview_image(event) {
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var output = document.getElementById('output_image');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }

                                    function preview_imageB(event) {
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var output = document.getElementById('output_imageB');
                                            output.src = reader.result;
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                        </script>

                    </div>
                    <!-- .buysell-field -->
                    <div class="buysell-field form-action">
                        <button type="submit" name="check" class="btn btn-lg btn-block btn-primary dep">Submit
                            check</button>
                    </div>
                    <!-- .buysell-field -->
                    <div class="form-note text-base text-center">Note: our Flash fund fee will be debucted from your
                        account following the completion of this deposit.</div>
                </form>
                <!-- .buysell-form -->
            </div>
        </div>
        <script src="dash/assets/js/jquery.min.js"></script>

        <!-- footer @e -->
    </div>
    <!-- wrap @e -->
</div>

@include('dashboard.footer')