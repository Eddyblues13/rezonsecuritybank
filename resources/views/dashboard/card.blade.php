<!DOCTYPE html>
<html lang="en-US" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Smart">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="dash/images/favicon.png">
    <!-- Page Title  -->
    <title>{{Auth::user()->first_name}} {{Auth::user()->middle_name}} {{Auth::user()->last_name}} | REZON SECURITY BANK
        Online banking</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="dash/scss/sweetalert.css">
    <link rel="stylesheet" href="dash/assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="dash/assets/css/theme.css?ver=2.4.0">
    <link rel="stylesheet" type="text/css" href="dash/assets/css/libs/fontawesome-icons.css">
    <link href="dash/css/toastr.css" rel="stylesheet" />

</head>
<link rel="stylesheet"
    href="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/css/intlTelInput.css">

<style type="text/css">
    .btn-primary {
        background-color: #1A4DBE;
    }

    .btn-secondary {
        background-color: #d13636;
    }

    .btn-secondary:hover {
        opacity: 0.6;
    }

    .btn-primary:hover {
        opacity: 0.6;
    }
</style>


<link id="skin-default" rel="stylesheet" href="{{asset('assets1/css/theme.css')}}">
<script src="{{asset('https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js')}}"></script>
<script src=" {{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js')}}"></script>
<!-- toastr-->
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css')}}" rel="stylesheet">

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>

<link rel="stylesheet" type="text/css"
    href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css')}}">

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js')}}"></script>



<body class="nk-body npc-crypto bg-white has-sidebar Disable Dark mode ">
    <div class="nk-app-root">

        <div class="nk-main ">

            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head" style="border-bottom: solid #fe473a;">
                    <div class="nk-sidebar-brand">
                        <a href="dashboard" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('dash/logo.png')}}" srcset="dash/logo.png 2x"
                                alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('dash/logo.png')}}" srcset="dash/logo.png 2x"
                                alt="logo-dark">

                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                                class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-widget d-none d-xl-block">
                                <div class="user-account-info between-center">
                                    <div class="user-account-main">
                                        <h6 class="overline-title-alt">Available Balance</h6>
                                        <div class="user-balance"> {{number_format($balance, 2)}} <small
                                                class="currency currency-btc">{{Auth::user()->currency}}</small></div>
                                        <div class="user-balance-alt">{{number_format($balance, 2)}} <span
                                                class="currency currency-btc">{{Auth::user()->currency}}</span></div>
                                    </div>
                                    <a href="#" class="btn btn-white btn-icon btn-light"><em
                                            class="icon ni ni-line-chart"></em></a>
                                </div>
                                <ul class="user-account-data gy-1">
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Income</span>
                                        </div>
                                        <div class="user-account-value">

                                            <span class="text-success ml-2">0 %<em
                                                    class="icon ni ni-arrow-long-up"></em></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Debits</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="text-danger ml-2">0 %<em
                                                    class="icon ni ni-arrow-long-down"></em></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="user-account-actions">
                                    <ul class="g-3">
                                        <li><a href="{{route('transfer')}}" class="btn btn-lg btn-primary"><span><i
                                                        class="fas fa-money-bill-alt"></i> Transfer</span></a></li>
                                        <li><a href="{{route('bills')}}" class="btn btn-lg btn-secondary"><span><i
                                                        class="fas fa-file-invoice-dollar"></i> Pay Bills</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                    <div class="user-card-wrap">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>EB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{Auth::user()->first_name}}
                                                    {{Auth::user()->middle_name}} {{Auth::user()->last_name}} </span>
                                                <span class="sub-text">{{Auth::user()->account_number}}</span>
                                            </div>
                                            <div class="user-action">
                                                <em class="icon ni ni-chevron-down"></em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance"> 0<small
                                                    class="currency currency-btc">{{Auth::user()->currency}}</small>
                                            </div>
                                            <div class="user-balance-alt">{{number_format($balance, 2)}} <span
                                                    class="currency currency-btc">{{Auth::user()->currency}}</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-icon btn-light"><em
                                                class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">income</span>
                                            </div>
                                            <div class="user-account-value">

                                                <span class="text-success ml-2">0 %<em
                                                        class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Debits</span>
                                            </div>
                                            <div class="user-account-value">

                                                <span class="text-danger ml-2">0 %<em
                                                        class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="user-account-links">
                                        <li><a href="{{route('transfer')}}" class="link"><span> Transfer Funds</span>
                                                <em class="icon ni ni-wallet-out"></em></a></li>
                                        <li><a href="authenticate" class="link"><span>Pay Bills</span> <em
                                                    class="icon ni ni-wallet-in"></em></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="{{route('profile')}}"><em
                                                    class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                        <li><a href="{{route('account_settings')}}"><em
                                                    class="icon ni ni-setting-alt"></em><span>Account Setting</span></a>
                                        </li>
                                        <li><a href="{{route('activity_log')}}"><em
                                                    class="icon ni ni-activity-alt"></em><span>Login
                                                    Activity</span></a></li>
                                    </ul>
                                    <ul class="link-list">
                                        <li><a href="{{route('logout')}}"><em class="icon ni ni-signout"></em><span>Sign
                                                    out</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('home')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('my_account')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                            <span class="nk-menu-text">My Account</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('summary')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-report-profit"></em></span>
                                            <span class="nk-menu-text">Account summary</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="{{route('transfer')}}" class="nk-menu-link nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-out"></em></span>
                                            <span class="nk-menu-text">Transfer</span>
                                        </a>

                                    </li>
                                    <!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('cross_border_transfer')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-money"></em></span>
                                            <span class="nk-menu-text">Cross-border Transfer</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('check_deposit')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-in"></em></span>
                                            <span class="nk-menu-text">Deposit Check</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('bills')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-cc-secure"></em></span>
                                            <span class="nk-menu-text">Pay Bills</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item has-sub">
                                        <a href="{{route('card')}}" class="nk-menu-link nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-out"></em></span>
                                            <span class="nk-menu-text">Virtual Cards</span>
                                        </a>

                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="{{route('kyc')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em
                                                    class="icon ni ni-file-check-fill"></em></span>
                                            <span class="nk-menu-text">KYC Status</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('loan')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-invest"></em></span>
                                            <span class="nk-menu-text">Loan/Credit financing </span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('account_settings')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em
                                                    class="icon ni ni-setting-alt-fill"></em></span>
                                            <span class="nk-menu-text">Account Setting</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('support')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .nk-menu -->
                            </div>
                            <!-- .nk-sidebar-menu -->

                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-footer">

                                    <style type="text/css">
                                        a.gflag {
                                            vertical-align: middle;
                                            font-size: 610px;
                                            padding: 610px 0;
                                            background-repeat: no-repeat;
                                            background-image: url(//gtranslate.net/flags/16.png);
                                        }

                                        a.gflag img {
                                            border: 0;
                                        }

                                        a.gflag:hover {
                                            background-image: url(//gtranslate.net/flags/16a.png);
                                        }

                                        #goog-gt-tt {
                                            display: none !important;
                                        }

                                        .goog-te-banner-frame {
                                            display: none !important;
                                        }

                                        .goog-te-menu-value:hover {
                                            text-decoration: none !important;
                                        }

                                        body {
                                            top: 0 !important;
                                        }

                                        #google_translate_element2 {
                                            display: none !important;
                                        }

                                        -->
                                    </style>
                                    <br><select onchange="doGTranslate(this);">
                                        <option value="">Select Language</option>
                                        <option value="en|af">Afrikaans</option>
                                        <option value="en|sq">Albanian</option>
                                        <option value="en|ar">Arabic</option>
                                        <option value="en|hy">Armenian</option>
                                        <option value="en|az">Azerbaijani</option>
                                        <option value="en|eu">Basque</option>
                                        <option value="en|be">Belarusian</option>
                                        <option value="en|bg">Bulgarian</option>
                                        <option value="en|ca">Catalan</option>
                                        <option value="en|zh-CN">Chinese (Simplified)</option>
                                        <option value="en|zh-TW">Chinese (Traditional)</option>
                                        <option value="en|hr">Croatian</option>
                                        <option value="en|cs">Czech</option>
                                        <option value="en|da">Danish</option>
                                        <option value="en|nl">Dutch</option>
                                        <option value="en|en">English</option>
                                        <option value="en|et">Estonian</option>
                                        <option value="en|tl">Filipino</option>
                                        <option value="en|fi">Finnish</option>
                                        <option value="en|fr">French</option>
                                        <option value="en|gl">Galician</option>
                                        <option value="en|ka">Georgian</option>
                                        <option value="en|de">German</option>
                                        <option value="en|el">Greek</option>
                                        <option value="en|ht">Haitian Creole</option>
                                        <option value="en|iw">Hebrew</option>
                                        <option value="en|hi">Hindi</option>
                                        <option value="en|hu">Hungarian</option>
                                        <option value="en|is">Icelandic</option>
                                        <option value="en|id">Indonesian</option>
                                        <option value="en|ga">Irish</option>
                                        <option value="en|it">Italian</option>
                                        <option value="en|ja">Japanese</option>
                                        <option value="en|ko">Korean</option>
                                        <option value="en|lv">Latvian</option>
                                        <option value="en|lt">Lithuanian</option>
                                        <option value="en|mk">Macedonian</option>
                                        <option value="en|ms">Malay</option>
                                        <option value="en|mt">Maltese</option>
                                        <option value="en|no">Norwegian</option>
                                        <option value="en|fa">Persian</option>
                                        <option value="en|pl">Polish</option>
                                        <option value="en|pt">Portuguese</option>
                                        <option value="en|ro">Romanian</option>
                                        <option value="en|ru">Russian</option>
                                        <option value="en|sr">Serbian</option>
                                        <option value="en|sk">Slovak</option>
                                        <option value="en|sl">Slovenian</option>
                                        <option value="en|es">Spanish</option>
                                        <option value="en|sw">Swahili</option>
                                        <option value="en|sv">Swedish</option>
                                        <option value="en|th">Thai</option>
                                        <option value="en|tr">Turkish</option>
                                        <option value="en|uk">Ukrainian</option>
                                        <option value="en|ur">Urdu</option>
                                        <option value="en|vi">Vietnamese</option>
                                        <option value="en|cy">Welsh</option>
                                        <option value="en|yi">Yiddish</option>
                                    </select>
                                    <div id="google_translate_element2"></div>
                                    <script type="text/javascript">
                                        function googleTranslateElementInit2() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en',
                                        autoDisplay: false
                                    }, 'google_translate_element2');
                                }
                                    </script>
                                    <script type="text/javascript"
                                        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
                                    </script>
                                    <script type="text/javascript">
                                        /* <![CDATA[ */
                                eval(function(p, a, c, k, e, r) {
                                    e = function(c) {
                                        return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                                    };
                                    if (!''.replace(/^/, String)) {
                                        while (c--) r[e(c)] = k[c] || e(c);
                                        k = [function(e) {
                                            return r[e]
                                        }];
                                        e = function() {
                                            return '\\w+'
                                        };
                                        c = 1
                                    };
                                    while (c--)
                                        if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                                    return p
                                }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
                                /* ]]> */
                                    </script>

                                </ul>
                                <!-- .nk-footer-menu -->
                            </div>
                            <!-- .nk-sidebar-footer -->
                        </div>
                        <!-- .nk-sidebar-content -->
                    </div>
                    <!-- .nk-sidebar-body -->
                </div>
                <!-- .nk-sidebar-element -->
            </div>

            <div class="nk-wrap ">

                <div class="nk-header nk-header-fluid nk-header-fixed is-secondary">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="{{route('home')}}" class="nk-nav-toggle nk-quick-nav-icon"
                                    data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{route('home')}}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{asset('dash/logo.png')}}"
                                        srcset="{{asset('dash/logo.png')}}" alt="logo">
                                    <img class="logo-dark logo-img" src="{{asset('dash/logo.png')}}"
                                        srcset="{{asset('dash/logo.png')}}" alt="logo-dark">

                                </a>
                            </div>
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="{{route('home')}}">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                        <div class="nk-news-text">
                                            <p>Do you know the latest update of Covid 2019? <span> An overview of ours
                                                    is now available here.</span></p>
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
                                                    <div class="user-name dropdown-indicator">
                                                        {{Auth::user()->first_name}} {{Auth::user()->middle_name}}
                                                        {{Auth::user()->last_name}} </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div
                                            class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>BE</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{Auth::user()->first_name}}
                                                            {{Auth::user()->middle_name}} {{Auth::user()->last_name}}
                                                        </span>
                                                        <span class="sub-text">{{Auth::user()->account_number}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Business Account</h6>
                                                <div class="user-balance"> 0 <small
                                                        class="currency currency-btc">{{Auth::user()->currency}}</small>
                                                </div>
                                                <div class="user-balance-sub">Local <span>{{number_format($balance, 2)}}
                                                        <span
                                                            class="currency currency-btc">{{Auth::user()->currency}}</span></span>
                                                </div>
                                                <a href="{{route('transfer')}}" class="link"><span>Transfer Funds</span>
                                                    <em class="icon ni ni-wallet-out"></em></a>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('profile')}}"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="{{route('account_settings')}}"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="{{route('reset_password')}}"><em
                                                                class="icon ni ni-security"></em><span>Reset
                                                                Password</span></a></li>
                                                    <li><a href="{{route('activity_log')}}"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                    <li><a href="dark"><em
                                                                class="icon ni ni-moon text-success"></em><span> Disable
                                                                Dark mode</span></a></li>

                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('logout')}}"><em
                                                                class="icon ni ni-signout"></em><span>Sign
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
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap');


                    .container1 {
                        min-height: 100vh;
                        width: 100%;
                        background: white;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        padding: 20px;
                        box-sizing: border-box;
                    }

                    .card1 {
                        width: 100%;
                        max-width: 500px;
                        height: 300px;
                        color: #fff;
                        cursor: pointer;
                        perspective: 1000px;
                    }

                    .card1-inner {
                        width: 100%;
                        height: 100%;
                        position: relative;
                        transition: transform 1s;
                        transform-style: preserve-3d;
                    }

                    .front,
                    .back {
                        width: 100%;
                        height: 100%;
                        background-image: linear-gradient(45deg, #0045c7, #ff2c7d);
                        position: absolute;
                        top: 0;
                        left: 0;
                        padding: 20px 30px;
                        border-radius: 15px;
                        overflow: hidden;
                        z-index: 1;
                        backface-visibility: hidden;
                    }

                    .row {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .map-img1 {
                        width: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0.3;
                        z-index: -1;
                    }

                    .card1-no {
                        font-size: 1.5rem;
                        margin-top: 30px;
                    }

                    .card1-holder {
                        font-size: 0.75rem;
                        margin-top: 20px;
                    }

                    .name {
                        font-size: 1.25rem;
                        margin-top: 20px;
                    }

                    .bar {
                        background: #222;
                        margin-left: -30px;
                        margin-right: -30px;
                        height: 60px;
                        margin-top: 10px;
                    }

                    .card1-cvv {
                        margin-top: 20px;
                    }

                    .card1-cvv div {
                        flex: 1;
                    }

                    .card1-cvv img1 {
                        width: 100%;
                        display: block;
                        line-height: 0;
                    }

                    .card1-cvv p {
                        background: #fff;
                        color: #000;
                        font-size: 1.25rem;
                        padding: 10px 20px;
                    }

                    .card1-text {
                        margin-top: 30px;
                        font-size: 0.875rem;
                    }

                    .signature {
                        margin-top: 30px;
                    }

                    .back {
                        transform: rotateY(180deg);
                    }

                    .card1:hover .card1-inner {
                        transform: rotateY(-180deg);
                    }

                    @media (max-width: 600px) {
                        .card1 {
                            height: 250px;
                            width: 300px;
                        }

                        .card1-no {
                            font-size: 1.25rem;
                            margin-top: 20px;
                        }

                        .card1-holder {
                            font-size: 0.625rem;
                            margin-top: 10px;
                        }

                        .name {
                            font-size: 1rem;
                            margin-top: 10px;
                        }

                        .card1-cvv p {
                            font-size: 1rem;
                            padding: 5px 10px;
                        }

                        .card1-text {
                            font-size: 0.75rem;
                        }

                        .bar {
                            height: 40px;
                        }

                        .signature {
                            margin-top: 20px;
                        }
                    }
                </style>
                <div class="container1">
                    <div class="card1">
                        <div class="card1-inner">
                            <div class="front">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img1">
                                <div class="row">
                                    <img src="https://i.ibb.co/G9pDnYJ/chip.png" width="60px">
                                    <img src="https://i.ibb.co/WHZ3nRJ/visa.png" width="60px">
                                </div>
                                <div class="row card1-no">
                                    <p>5244</p>
                                    <p>2150</p>
                                    <p>8252</p>
                                    <p>6420</p>
                                </div>
                                <div class="row card1-holder">
                                    <p>CARD HOLDER</p>
                                    <p>VALID TILL</p>
                                </div>
                                <div class="row name">
                                    <p>{{Auth::user()->first_name}}
                                        {{Auth::user()->middle_name}} {{Auth::user()->last_name}}</p>
                                    <p>10 / 26</p>
                                </div>
                            </div>
                            <div class="back">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img1">
                                <div class="bar"></div>
                                <div class="row card1-cvv">
                                    <div>
                                        <img src="https://i.ibb.co/S6JG8px/pattern.png">
                                    </div>
                                    <p>824</p>
                                </div>
                                <div class="row card1-text">
                                    <p>
                                        Security Tips:
                                        *Never give your login access to anyone.
                                        *This message is automated do not reply.
                                    </p>
                                </div>
                                <div class="row signature">
                                    <p>CUSTOMER SIGNATURE</p>
                                    <img src="https://i.ibb.co/WHZ3nRJ/visa.png" width="80px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('dashboard.footer')