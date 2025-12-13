@include('dashboard.header')
<div class="container-fluid p-2" style="margin-top:80px;">
    <div class="modal-content">
        <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">
                <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                <h4 class="nk-modal-title">Your check is being proccessed</h4>
                <div class="nk-modal-text">
                    <p class="caption-text">Check deposit of <strong>2000</strong> USD on your <strong>Gemstone Business
                            Account</strong> Have been received</p>
                    <p class="sub-text-sm">Details of your deposit are as below.</a></p>
                </div>
                <ul class="buysell-overview-list">
                    <li class="buysell-overview-item">
                        <span class="pm-title">Total amount</span>
                        <span class="pm-currency"></em> <span>2000 {{Auth::user()->currency}}</span></span>
                    </li>
                    <li class="buysell-overview-item">
                        <span class="pm-title">Ref number</span>
                        <span class="pm-currency">216834050</span>
                    </li>
                    <li class="buysell-overview-item">
                        <span class="pm-title">Fee</span>
                        <span class="pm-currency">2 {{Auth::user()->currency}}</span>
                    </li>
                </ul>
            </div>
            <div class="nk-modal-action-lg">
                <ul class="btn-group gx-4">
                    <li><a href="home" class="btn btn-lg btn-mw btn-success">Done</a> <a href="check_deposit"
                            class="btn btn-lg btn-mw btn-primary">Deposit another</a></li>
                </ul>
            </div>
        </div>
    </div><!-- .modal-body -->
</div><!-- .modal-content -->
</div>
@include('dashboard.footer')