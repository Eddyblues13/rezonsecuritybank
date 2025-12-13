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
    <div class="nk-content">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub">
                    </div>
                    <div class="nk-block-between-md g-4 card-bordered">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title fw-normal">Internet Banking Bill Pay.</h4>
                            <div class="nk-block-des">
                                <p>
                                </p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools gx-3">
                                <li><a href="transfer" class="btn btn-secondary btn-light text-light"><span>Transfer
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
            <div class="card-header text-light" style="background-color:#1A4DBE;">
                <ul class="nav nav-tabs mt-n3">
                    <li class="nav-item ">
                        <a class="nav-link active text-light" data-toggle="tab" href="#tabItem5"><em
                                class="icon ni ni-wallet-alt"></em> <span>Pay a Biller</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" data-toggle="tab" href="#tabItem6"><em
                                class="icon ni ni-cc-new"></em><span>Add a Payee</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" data-toggle="tab" href="#tabItem7"><em
                                class="icon ni ni-exchange"></em><span>History</span></a>
                    </li>
                </ul>
            </div>
            <div class="card-inner">
                <div class="tab-content">
                    <div class="tab-pane active" id="tabItem5">

                        <p>
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label">Choose payment account</label>
                            </div>
                            <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency-modal">
                            <div class="dropdown buysell-cc-dropdown">
                                <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                    <div class="coin-item coin-btc">
                                        <div class="coin-icon">
                                            <em class="icon ni ni-wallet-out"></em>
                                        </div>
                                        <div class="coin-info">
                                            <span class="coin-name">Business Account</span>
                                            <span class="coin-text">Balance(USD{{number_format($balance, 2)}})</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                    <ul class="buysell-cc-list">
                                        <li class="buysell-cc-item selected">
                                            <a href="#" class="buysell-cc-opt" data-currency="btc">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-wallet-out"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">Business Account</span>
                                                        <span class="coin-text">4228*****</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- .buysell-cc-item -->
                                    </ul>
                                </div>
                            </div>
                            <!-- .dropdown -->
                        </div>
                        <!-- .buysell-field -->
                        <form action="" method="post">
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <div class="form-control-wrap">
                                        <select type="text" name="payeeid" class="form-control form-control-outlined"
                                            id="payeeid" placeholder="">
                                            <option disabled="" selected="">Select a payee</option>
                                            <option selected disabled>Kindly Add a payee</option>
                                        </select>
                                        <label class="form-label-outlined" for="outlined">Select a payee</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-control-wrap">
                                        <input type="date" class="form-control form-control-outlined" id="dated"
                                            name="dated" placeholder="">
                                        <label class="form-label-outlined" for="outlined">Delivery date</label>
                                    </div>
                                </div>
                                <div class="buysell-field form-group col-md-12">
                                    <div class="form-label-group">
                                        <label class="form-label" for="buysell-amount">Amount</label>
                                    </div>
                                    <div class="form-control-group">
                                        <input type="number" class="form-control form-control-lg form-control-number"
                                            id="amount" name="amount" placeholder="2000">
                                        <div class="form-dropdown">
                                            <div class="text">USD<span></span></div>
                                        </div>
                                    </div>
                                    <div class="form-note-group">
                                        <span class="buysell-min form-note-alt"></span> <span
                                            class="buysell-rate form-note-alt">*Bill Pay fee will be deducted</span>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="memo"
                                            name="memo" placeholder="">
                                        <label class="form-label-outlined" for="outlined">Memo (optional)</label>
                                    </div>
                                </div>
                                <div class="payBillResult"></div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block payBill"
                                        id="btn1">Continue</button>
                                </div>

                            </div>
                        </form>
                        </p>
                    </div>
                    <div class="tab-pane" id="tabItem6">
                        <p>
                        <form method="post" autocomplete="off" action="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="name"
                                            name="name">
                                        <label class="form-label-outlined" for="outlined">Payee name</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-control-wrap">
                                        <select type="text" class="form-control form-control-outlined" id="method"
                                            name="method" placeholder="">
                                            <option>Paper Check</option>
                                        </select>
                                        <label class="form-label-outlined" for="outlined">Payment Delivery
                                            Method</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="account"
                                            name="account">
                                        <label class="form-label-outlined" for="outlined">Account Number</label>
                                        <small>This is the account number that appears on your bills. If you don't have
                                            account number, you can enter NA</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="address"
                                            name="address">
                                        <label class="form-label-outlined" for="outlined">Address 1</label>
                                        <small>Enter the payment address that appears on your bill. We'll mail your
                                            payment to this address.</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="outlined">
                                        <label class="form-label-outlined" for="outlined">Address 2</label>
                                        <small>Optional</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="city"
                                            name="city">
                                        <label class="form-label-outlined" for="outlined">City</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="state"
                                            name="state">
                                        <label class="form-label-outlined" for="outlined">State</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="zipcode"
                                            name="zipcode">
                                        <label class="form-label-outlined" for="outlined">Zip Code</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-outlined" id="nickname"
                                            name="nickname">
                                        <label class="form-label-outlined" for="outlined">Nickname</label>
                                        <small>Optional Nickname are for your personal use only and will not appear on
                                            any of your payment.</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <div class="custom-control custom-control-sm custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2">Add this Payee to
                                                your favorites</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="addPayeeResult"></div>
                                <div class="form-group col-md-12">
                                    <div class="form-control-wrap">
                                        <button type="submit" class="btn btn-primary btn-block addPayee"
                                            id="btn2">continue</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </p>
                    </div>
                    <div class="tab-pane" id="tabItem7">
                        <p>
                        <div class="card card-preview ">
                            <div class="card-inner p-0">
                                <table class="datatable-init table">
                                    <thead>
                                        <tr>
                                            <th>Payee</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.footer')