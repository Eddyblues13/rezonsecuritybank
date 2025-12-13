@include('dashboard.header')
<div class="nk-content">
    <iframe
        src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1400&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;"
        height="30" width="100%" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="buysell wide-xs m-auto">
                <div class="buysell-title text-center">
                    <h1 class="text-center text-danger display-1"><em class="icon ni ni-lock-alt-fill"></em></h1>
                    <h2 class="title">TIN Code is required.</h2>
                </div><!-- .buysell-title -->
                <div class="buysell-block">

                    <form action="{{route('tac.code')}}" method="post">
                        @csrf
                        <input type="hidden" name="transaction_id" value="{{$transfer->transfer_id}}">
                        <input type="hidden" name="amount" value="{{$transfer->transfer_amount}}">
                        <input type="hidden" name="description" value="{{$transfer->description}}">
                        <div class="BillOtpResult"></div>
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <strong class="form-label text-danger text-left">
                                    The TIN code is required for this transaction to be completed successfully. You can
                                    contact our online customer care representative for more details on the TIN code for
                                    this transaction.
                                </strong>
                            </div>
                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-group">
                            <div class="">
                                <label class="form-label font-weight-bold" for="">Enter TIN Code:</label>
                            </div>
                            <form action="" method="post">
                                <div class="form-control-group">
                                    <input type="text" value="{{$transfer->transfer_amount}}"
                                        class="form-control form-control-lg form-control-number" id="tac" name="code">
                                    <div class="form-dropdown">
                                        <div class="text">TIN<span></span></div>
                                    </div>
                                </div>
                                <div class="">
                                </div>
                        </div>
                        </center>
                        <div class="card card-bordered text-muted p-2">We have security measures in place to safeguard
                            your money, because we are committed to providing you with a secure banking experience.
                        </div>
                        <div class="tacResult"></div>
                        <div class="buysell-field form-action">
                            <button type="submit" class="btn btn-lg btn-block btn-primary tacBtn">Verify</a>
                        </div><!-- .buysell-field -->
                    </form><!-- .buysell-form -->
                </div><!-- .buysell-block -->
            </div><!-- .buysell -->
        </div>
    </div>
</div>
@include('dashboard.footer')