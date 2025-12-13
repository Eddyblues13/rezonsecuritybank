@include('dashboard.header')

<div class="nk-wrap ">
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
                                    <div class="user-balance"> 0 <small
                                            class="currency currency-btc">{{Auth::user()->currency}}</small></div>
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
                                        <li><a href="{{route('account_settings')}}"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="{{route('reset_password')}}"><em
                                                    class="icon ni ni-security"></em><span>Reset Password</span></a>
                                        </li>
                                        <li><a href="{{route('activity_log')}}"><em
                                                    class="icon ni ni-activity-alt"></em><span>Login Activity</span></a>
                                        </li>
                                        <li><a href="dark"><em class="icon ni ni-moon text-success"></em><span> Disable
                                                    Dark mode</span></a></li>

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
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>Account Setting</span></div>
                        <h2 class="nk-block-title fw-normal">My Profile</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em
                                        class="icon ni ni-info" data-toggle="tooltip" data-placement="right"
                                        title="Tooltip on right"></em></span></p>
                        </div>
                    </div>
                </div>
                <!-- .nk-block-head -->
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('account_settings')}}">Security</a>
                    </li>

                </ul>
                <!-- .nk-menu -->
                <!-- NK-Block @s -->
                <div class="nk-block">
                    <div class="alert alert-warning">
                        <div class="alert-cta flex-wrap flex-md-nowrap">
                            <div class="alert-text">
                                <p>When you're on public Wi-Fi, hackers can more easily access your computer and steal
                                    personal information from it. You should never access your online banking through a
                                    computer, tablet, or mobile phone unless you're
                                    on a secure Wi-Fi network with a password, or using your own cell phone data
                                    connection. This is much more difficult for thieves to hack, so it keeps your
                                    information safer.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .alert -->
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Personal Information</h5>
                            <div class="nk-block-des">
                                <p>Basic info, like your name and address, that you using on REZON SECURITY BANK.</p>
                            </div>
                        </div>
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-data data-list">
                        <div class="data-head">
                            <h6 class="overline-title">Basics</h6>
                        </div>
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Full Name</span>
                                <span class="data-value">{{Auth::user()->first_name}} {{Auth::user()->middle_name}}
                                    {{Auth::user()->last_name}}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Display Name</span>
                                <span class="data-value">{{Auth::user()->first_name}}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Email</span>
                                <span class="data-value"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="70321c0515030711091e154143434330171d11191c5e131f1d">[email&#160;protected]</a></span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more disable"><em
                                        class="icon ni ni-lock-alt"></em></span></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Phone Number</span>
                                <span class="data-value text-soft">{{Auth::user()->phone_number}} </span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Account Number</span>
                                <span class="data-value">{{Auth::user()->account_number}} </span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">State</span>
                                <span class="data-value">{{Auth::user()->state}}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Country</span>
                                <span class="data-value">{{Auth::user()->country}}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit"
                            data-tab-target="#address">
                            <div class="data-col">
                                <span class="data-label">Address</span>
                                <span class="data-value">{{Auth::user()->address_one}} {{Auth::user()->address_two}}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em
                                        class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <!-- .data-item -->
                    </div>
                    <!-- .nk-data -->
                    <div class="nk-data data-list">
                        <div class="data-head">
                            <h6 class="overline-title">Preferences</h6>
                        </div>
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Language</span>
                                <span class="data-value">English (United Kingdom)</span>
                            </div>
                            <div class="data-col data-col-end"><a href="#" data-toggle="modal"
                                    data-target="#profile-language" class="link link-primary">Change Language</a></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Date Format</span>
                                <span class="data-value">M d, YYYY</span>
                            </div>
                            <div class="data-col data-col-end"><a href="#" data-toggle="modal"
                                    data-target="#profile-language" class="link link-primary">Change</a></div>
                        </div>
                        <!-- .data-item -->
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Current Timezone</span>
                                <span class="data-value">Europe/Amsterdam</span>
                            </div>
                            <div class="data-col data-col-end"><a href="#" data-toggle="modal"
                                    data-target="#profile-language" class="link link-primary">Change</a></div>
                        </div>
                        <!-- .data-item -->
                    </div>
                    <!-- .nk-data -->
                </div>
                <!-- NK-Block @e -->
                <!-- //  Content End -->
            </div>
        </div>
    </div>

    @include('dashboard.footer')