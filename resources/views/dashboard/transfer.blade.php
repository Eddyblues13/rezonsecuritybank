@include('dashboard.header')
@if($transfer && $transfer->transfer_status == '0')
<script>
    $(document).ready(function(){
        $('#modalAlert').modal('show');
        });
</script>

<div class="modal fade" tabindex="-1" role="dialog" id="modalAlert" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body modal-body-lg">
                <div class="nk-block-head nk-block-head-xs text-center">
                    <h5 class="nk-block-title">Pending transaction</h5>
                    <div class="nk-block-text">
                        <div class="caption-text text-primary display-4">You currently have a pending transaction in
                            your account, click continue if you will like to continue this transaction.</div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="buysell-overview">
                        <ul class="buysell-overview-list">
                            <li class="buysell-overview-item">
                                <span class="pm-title"><em class="icon ni ni-alert-circle"></em>
                                    <span>Amount</span></span>
                                <span class="pm-title">{{Auth::user()->currency}} {{$transfer->transfer_amount}} </span>
                            </li>
                            <li class="buysell-overview-item">
                                <span class="pm-title"><em class="icon ni ni-alert-circle"></em> Bank Name</span>
                                <span class="pm-currency">{{$transfer->bank_name}}</span>
                            </li>

                            <li class="buysell-overview-item">
                                <span class="pm-title"><em class="icon ni ni-alert-circle"></em> Account Number</span>
                                <span class="pm-currency">{{$transfer->account_number}}</span>
                            </li>
                            <li class="buysell-overview-item">
                                <span class="pm-title"><em class="icon ni ni-alert-circle"></em> Account Holder</span>
                                <span class="pm-currency">{{$transfer->account_holder}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="buysell-field form-group">
                        <div class="form-label-group">
                            <label class="form-label">Sending from:</label>
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
                                        <span class="coin-text">{{substr(Auth::user()->account_number, 0, 4) .
                                            str_repeat('*', strlen(Auth::user()->account_number) - 8) .
                                            substr(Auth::user()->account_number, -4)}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div>

                    </div><!-- .buysell-field -->
                    <div class="buysell-field form-action text-center">
                        <div>
                            <form action="{{route('complete.transfer')}}" method="post">
                                @csrf
                                <input type="hidden" name="transaction_id" value="{{$transfer->transfer_id}}">
                                <input type="hidden" name="amount" value="{{$transfer->transfer_amount}}">
                                <input type="hidden" name="description" value="{{$transfer->description}}">


                                <div id="result"></div>
                                <button class="btn btn-primary btn-block btn-lg eg-swal-av5" type="submit"> Complete
                                    transaction</button>
                            </form>
                        </div>
                        <div class="pt-3">
                            <a href="{{route('cancel.transfer',$transfer->id)}}" class="link link-danger">Cancel
                                transaction</a>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .modal-body -->
        </div>
    </div>
</div>
@endif











<div class="nk-content">
    <iframe
        src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1400&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;"
        height="30" width="100%" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-sub">
                </div>
                <div class="nk-block-between-md g-4 card-bordered">
                    <div class="nk-block-head-content p-1">
                        <marquee direction="">
                            <h2 class="nk-block-title fw-normal text-success">PAY FOR GOODS AND SERVICES, TRANSFER MONEY
                                TO FRIENDS AND FAMILY.</h2>
                        </marquee>
                    </div>
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <!--  <li><a href="deposit-history" class="btn btn-primary"><span>Transaction  History</span> <em class="icon ni ni-invest"></em></a></li>-->
                            <li><a href="{{route('cross_border_transfer')}}"
                                    class="btn text-white btn-secondary"><span>Cross-border transfer</span><em
                                        class="icon ni ni-wallet-out"></em></a></li>
                        </ul>

                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
        </div>
    </div>


    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">
                    <div class="buysell-title text-center">
                        <h2 class="title">REZON SECURITY BANK Online Banking Transfer.</h2>
                    </div><!-- .buysell-title -->
                    <div class="buysell-block">
                        <form action="{{ route('first.transfer')}}" method="post" class="buysell-form">
                            @csrf
                            <div class="buysell-field form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Select Account</label>
                                </div>
                                <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency">
                                <div class="dropdown buysell-cc-dropdown">
                                    <a href="#" class="buysell-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                        <div class="coin-item coin-btc">
                                            <div class="coin-icon">
                                                <em class="icon ni ni-sign-usd"></em>
                                            </div>
                                            <div class="coin-info">
                                                <span class="coin-name">Business Account
                                                    ({{Auth::user()->currency}})</span>
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
                                                            <em class="icon ni ni-sign-usd"></em>
                                                        </div>
                                                        <div class="coin-info">
                                                            <span class="coin-name">Business Account
                                                                ({{Auth::user()->currency}})</span>
                                                            <span class="coin-text">Available Balance:
                                                                {{Auth::user()->currency}} {{number_format($balance,
                                                                2)}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- .dropdown-menu -->
                                </div><!-- .dropdown -->
                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-group">
                                <div class="result"></div>
                                <div class="form-label-group">
                                    <label class="form-label" for="buysell-amount">Amount to Transfer</label>
                                </div>
                                <span class="text-left">Daily Transfer Limit:</span>
                                <span class="text-right" style="float:right;">NLG0.00 OF NLG5,000.00</span>
                                <div class="form-control-group">
                                    <input type="number" class="form-control form-control-lg form-control-number"
                                        id="amount" name="amount" placeholder="2000">
                                    <div class="form-dropdown">
                                        <div class="text">USD<span></span></div>
                                    </div>
                                </div>
                                <div class="form-note-group">
                                    <span class="buysell-min form-note-alt">Minimum: 5.00
                                        {{Auth::user()->currency}}</span>
                                    <span class="buysell-rate form-note-alt">1 USD = 0 NLG</span>


                                </div>
                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-group">
                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-action">
                                <button type="submit" class="btn btn-lg btn-block btn-primary stepOne">Continue to next
                                    step</button>
                            </div><!-- .buysell-field -->
                            <div class="form-note text-base text-center">Note: our transfer fee is included.</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.footer')