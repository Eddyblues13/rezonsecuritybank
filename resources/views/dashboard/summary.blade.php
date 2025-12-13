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
                                        <li><a href="account-setting"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="password-reset"><em class="icon ni ni-security"></em><span>Reset
                                                    Password</span></a></li>
                                        <li><a href="{{route('activity_log')}}"><em
                                                    class="icon ni ni-activity-alt"></em><span>Login
                                                    Activity</span></a></li>
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
    <div class="nk-content">
        <iframe
            src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1400&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;"
            height="30" width="100%" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
        <div class="card card-preview ">
            <div class="card-inner p-0">
                <table class="datatable-init table">
                    <thead>
                        <tr>
                            <th>Ref </th>
                            <th>Type</th>
                            <th>Scope</th>
                            <th>Amount</th>
                            <th>Date </th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transactions)
                        <tr>
                            <td>{{$transactions->transaction_id}}</td>
                            <td>{{$transactions->transaction_type}}</td>
                            <td>{{$transactions->scope}}</td>
                            <td><b>{{Auth::user()->currency}}</b>{{ number_format($transactions->transaction_amount,
                                2)}}</td>
                            <td>{{ \Carbon\Carbon::parse($transactions->created_at)->format('D, M j, Y g:i A') }}</td>
                            <td>Salary</td>
                            @if($transactions->transaction_status=='1')
                            <td><strong class='text-success'>Completed</strong></td>
                            @elseif($transactions->transaction_status=='0')
                            <td><strong class='text-danger'>Pending</strong></td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('dashboard.footer')