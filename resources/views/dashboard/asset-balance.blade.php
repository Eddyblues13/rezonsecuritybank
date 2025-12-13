@include('dashboard.header')
<div class="main-panel bg-light">
			<div class="content bg-light">
				<div class="page-inner">
                                        
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
					<div class="mt-2 mb-4">
						<h1 class="title1 text-dark">Live Trade</h1>
					</div>
					<div>
    </div>					<div>
    </div>					<div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-75" src="https://img.icons8.com/office/16/000000/us-dollar--v2.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>$5.00</b></h5>
                                        <small class="text-muted">Account Balance</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                  <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/color/48/000000/bitcoin--v1.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 BTC</b></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>  
                        						                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/fluency/48/000000/ethereum.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 ETH</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/fluency/48/000000/litecoin.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 LTC</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/cotton/64/000000/chainlink.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 LINK</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                                                <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://s2.coinmarketcap.com/static/img/coins/64x64/1839.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 BNB</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                                                <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://s2.coinmarketcap.com/static/img/coins/64x64/2010.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 ADA</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                                                <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-25" src="https://dynamic-assets.coinbase.com/6ad513d3c9108b163cf0a4c9fd3441cadcb9cf656ea7b9fb333eb7e4a94cd503528e0a94188285d31aedfc392f0793fd4161f7ad4e04d5f6b82e4d70a314d295/asset_icons/80f3d2256652f5ccd680fc48702d130dd01f1bd7c9737fac560a02949efac3b9.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 AAVE</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/color/48/000000/tether--v2.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 USDT</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-75" src="https://img.icons8.com/material-sharp/24/000000/bitcoin.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 BCH</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/fluency/48/000000/ripple.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 XRP</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                                                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-light shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 bg-transparent stamp stamp-md">
                                        <img class="w-50" src="https://img.icons8.com/ios/50/000000/stellar.png"/>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-dark"><b>0 XLM</b></h5>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        					</div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tradingview-widget-container">
                                <div id="tradingview_f933e"></div>
                                <div class="tradingview-widget-copyright">
                                    <a href="#" rel="noopener" target="_blank"><span class="blue-text"></span> <span class="blue-text">Personal trading chart</span></a>
                                </div>                 
                            </div>
                        </div>
                        <div class="col-md-4">
                        <form method="post" action="{{url('trading')}}" >
												{{csrf_field()}}
                                        <div class="form-group">
                                    <h5 class="text-dark">Trade Pairs</h5>
                                    <select  class="form-control text-dark bg-light" name="source" id="sourceasset">
                                                                                    <option value="BTC/USDT">BTC / USDT	</option>
	                                                                                <option value="MKR / USDT">MKR / USDT	</option>
	                                                                                <option value="ETH / USDT">ETH / USDT</option>
	                                                                                <option value="BTC / BUSD">BTC / BUSD</option>
	                                                                                <option value="WBTC / USDT">WBTC / USDT</option>
	                                                                                <option value="BTC/USD">BTC / USD</option>
	                                                                                <option value="YFII / USDT">YFII / USDT</option>
	                                                                                <option value="ETH / BTC">ETH / BTC</option>
	                                                                                <option value="XRP / USDT">XRP / USDT</option>
	                                                                                <option value="PLCU / USDT">PLCU / USDT</option>
	                                                                                <option value="BTC / EUR">BTC / EUR</option>
	                                                                                <option value="LTC / USDT">LTC / USDT</option>
                                                                                    <option value="ETH / USD">ETH / USD</option>
	                                                                                <option value="USDT / USD">USDT / USD</option>
	                                                                                <option value="XMR / USDT">XMR / USDT</option>
	                                                                                <option value="ETH / BUSD">ETH / BUSD </option>
	                                                                                <option value="SOL / USDT">SOL / USDT</option>
	                                                                                <option value="BTC / USDC">BTC / USDC</option>
	                                                                                <option value="ZBTX / USDT">ZBTX / USDT	</option>
	                                                                                <option value="USDC / USDT">USDC / USDT	</option>
	                                                                                <option value="MATIC / USDT">MATIC / USDT</option>
	                                                                                <option value="ETC / USDT">ETC / USDT</option>
	                                                                                <option value="EILV / USDT">ILV / USDT	</option>
	                                                                                <option value="DOT / USDT">DOT / USDT	</option>
	                                                                                <option value="LDO / USDT">LDO / USDT</option>
                                                                                    <option value="FIL / USDT">FIL / USDT</option>
                                        	                                        <option value="AAVE / USDT">AAVE / USDT	</option>
                                    	                                            <option value="OP / USDT">OP / USDT</option>
	                                                                                <option value="SSV / USDT">SSV / USDT</option>
	                                                                                <option value="ETH / USDC">ETH / USDC</option>
	                                                                                <option value="BCH / USDT">BCH / USDT</option>
	                                                                                 <option value="AVAX / USDT">AVAX / USDT</option>
	                                                                                 <option value="BNB / USDT">BNB / USDT</option>
	                                                                                 <option value="LTC / BTC">LTC / BTC</option>
	                                                                                 <option value="TRX / USDT">TRX / USDT</option>
	                                                                                 <option value="LINK / USDT">LINK / USDT</option>
	                                                                                 <option value="DOGE / USDT">DOGE / USDT</option>
	                                                                                 <option value="ZEC / USDT">ZEC / USDT</option>
	                                                                                 <option value="ADA / USDT">ADA / USDT</option>
	                                                                                 <option value="BCH / BTC">BCH / BTC</option>
	                                                                                 <option value="VGX / USDT">VGX / USDT</option>
	                                                                                 <option value="STETH / USDT">STETH / USDT</option>
	                                                                                 <option value="ETC / BTC">ETC / BTC</option>
	                                                                                 <option value="FTM / USDT">FTM / USDT</option>
	                                                                                 <option value="USDT / EUR">USDT / EUR</option>
	                                                                                 <option value="LOOM / KRW">LOOM / KRW</option>
	                                                                                 <option value="MASK / USDT">MASK / USDT</option>
	                                                                                 <option value="DYDX / USDT">DYDX / USDT</option>
	                                                                                 <option value="MAGIC / USDT">MAGIC / USDT</option>
	                                                                                 <option value="EOS / USDT">EOS / USDT</option>
	                                                                                 <option value="REN / USDT">REN / USDT</option>
                                                                                     <option value="XRP / BUSD">XRP / BUSD</option>
	                                                                                 <option value="BTC / JPY">BTC / JPY</option>
	                                                                                 <option value="YFI / USDT">YFI / USDT</option>
	                                                                                 <option value="ETH / EUR">ETH / EUR</option>
	                                                                                 <option value="AXS / USDT">AXS / USDT</option>
                                                                                     <option value="GRT / USDT">GRT / USDT</option>
	                                                                                 <option value="XRP / BTC">XRP / BTC</option>
	                                                                                 <option value="GALA / USDT">GALA / USDT</option>
	                                                                                 <option value="ATOM / USDT">ATOM / USDT</option>
	                                                                                 <option value="DOT / USD">DOT / USD</option>
	                                                                                 <option value="APE / USDT">APE / USDT</option>
	                                                                                 <option value="WBTC / BTC">WBTC / BTC</option>
	                                                                                 <option value="KSM / USDT">KSM / USDT</option>
	                                                                                 <option value="NEAR / USDT">NEAR / USDT</option>
	                                                                                 <option value="LINK / USD">LINK / USD</option>
	                                                                                 <option value="NEO / USDT">NEO / USDT</option>
	                                                                                 <option value="SAND / USDT">SAND / USDT</option>
	                                                                                 <option value="AGIX / USDT">AGIX / USDT</option>
	                                                                                 <option value="STX / KRW">STX / KRW</option>
	                                                                                 <option value="LTC / USD">LTC / USD</option>
	                                                                                 <option value="USDT / TRY">USDT / TRY</option>
	                                                                                 <option value="XRP / USD">XRP / USD</option>
	                                                                                 <option value="XLM / USDT">XLM / USDT</option>
	                                                                                 <option value="TRU / USDT">TRU / USDT</option>
	                                                                                 <option value="DASH / USDT">DASH / USDT</option>
	                                                                                 <option value="CAKE / USDT">CAKE / USDT</option>
	                                                                                 <option value="USDT / USDC">USDT / USDC</option>
	                                                                                 <option value="UNI / USDT">UNI / USDT</option>
	                                                                                 <option value="BNB / BTC">BNB / BTC</option>
	                                                                                 <option value="AGIX / BUSD">AGIX / BUSD</option>
	                                                                                 <option value="SNX / USDT">SNX / USDT</option>
	                                                                                 <option value="MANA / USDT">MANA / USDT</option>
	                                                                                 <option value="SOL / BUSD">SOL / BUSD</option>
	                                                                                 <option value="DASH / BTC">DASH / BTC</option>
	                                                                                 <option value="BNB / BUSD">BNB / BUSD</option>
	                                                                                 <option value="AR / USDT">AR / USDT</option>
	                                                                                 <option value="DPX / USDT">DPX / USDT</option>
	                                                                                 <option value="RNDR / USDT">RNDR / USDT</option>
	                                                                                 <option value="USDi / USD">USDi / USD</option>
	                                                                                 <option value="SHIB / BUSD">SHIB / BUSD</option>
	                                                                                 <option value="FET / USDT">FET / USDT</option>
	                                                                                 <option value="NU / KRW">NU / KRW</option>
	                                                                                 <option value="XT / USDT">XT / USDT</option>
	                                                                                 <option value="CDAI / DAI">CDAI / DAI	</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-dark">Entry Price</h5>
                                    <input type="text" name="entry_price" class="form-control text-dark bg-light" placeholder="Enter entry price" id="amount">
                                </div>
                                <div class="form-group">
                                    <h5 class="text-dark">Take Profit</h5>
                                    <input type="text" name="take_profit" class="form-control text-dark bg-light" placeholder="Take Profit" id="amount">
                                </div>
                                <div class="form-group">
                                    <h5 class="text-dark">Stop loss</h5>
                                    <input type="text" name="stop_loss" class="form-control text-dark bg-light" placeholder="Stop Loss" id="amount">
                                </div>                               
                                <div class="cta inline-group">
                                    <button class="btn btn-success btn-block btn-sm" name="buy">
                                        Buy
                                    </button>
                                    <button class="btn btn-danger btn-block btn-sm" name="sell">
                                        Sell
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
            function Market(market) {
                new TradingView.widget({
                    "width": "100%",
                    "height": "400",
                    "symbol": market,
                    "interval": "1",
                    "timezone": "Etc/UTC",
                    "theme": 'light',
                    "style": "9",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "hide_side_toolbar": false,
                    "allow_symbol_change": true,
                    "calendar": false,
                    "container_id": "tradingview_f933e"
                });
            }
            
            
        </script>

        <script>
    //load chart
    Market("BINANCE:BTCUSD");
            
    let destinationasset = document.getElementById('destinationasset');
    let sourceasset = document.getElementById('sourceasset');
    let amount = document.getElementById('amount');
    let quatity = document.getElementById('quantity');
    // console.log(destinationasset);

    destinationasset.addEventListener('change', validate);
    sourceasset.addEventListener('change', validate);
    if (destinationasset.value == sourceasset.value) {
        $.notify({
            // options
            icon: 'flaticon-alarm-1',
            title: 'Success',
            message: 'Source and Destination account cannot be thesame',
        },{
            type: 'danger',
        });
                
        destinationasset.value = '';
        amount.placeholder = '';
        quatity.placeholder = '';
        amount.value = '';
        quatity.value = '';
    } else {
        amount.placeholder = `Enter amount of ${sourceasset.value}`;
        quatity.placeholder = `Quantity of ${destinationasset.value}`;

    }
    function validate(){
        Market("BINANCE:"+sourceasset.value.toUpperCase()+"USD");
        amount.value = '';
        quatity.value = '';
        if (destinationasset.value == sourceasset.value) {
            $.notify({
                // options
                icon: 'flaticon-alarm-1',
                title: 'Success',
                message: 'Source and Destination account cannot be thesame',
            },{
                type: 'danger',
            });
                  
            destinationasset.value = '';
            amount.placeholder = '';
            quatity.placeholder = '';
            amount.value = '';
            quatity.value = '';
        } else {
            amount.placeholder = `Enter amount of ${sourceasset.value}`;
            quatity.placeholder = `Quantity of ${destinationasset.value}`;

        }
    }

    amount.addEventListener('keyup', getQuantity);

    function getQuantity(){
        let uurl = "https://trader.digitalcryptocurrencytrade.com/dashboard/asset-price" + '/' + sourceasset.value  + '/' + destinationasset.value+ '/' + amount.value;
        $.ajax({
            url: uurl,
            type: 'GET',
            
            success: function(response) {
                if (response.status === 200) {
                    //console.log(response.data);
                    quatity.value = response.data + ' ' + destinationasset.value;
                    document.getElementById('realquantity').value = response.data;
                }
            },
            error: function(error) {
                console.log(error);
            },
    
        });
    }

    $('#exchnageform').on('submit', function(event) {
        event.preventDefault();
        if (amount.value == '') {
            $.notify({
                // options
                icon: 'flaticon-alarm-1',
                title: 'Success',
                message: 'Please Enter an Amount to Exchange',
            },{
                type: 'danger',
            });
        }else{
            $.ajax({
                url: "https://trader.digitalcryptocurrencytrade.com/dashboard/exchange",
                type: 'POST',
                data: $('#exchnageform').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        },{
                            type: 'success',
                        });

                        setTimeout(function(){ window.location.reload(true);}, 3000);
                        
                    } else {
                        $.notify({
                            icon: 'flaticon-alarm-1',
                            title: 'Error',
                            message: response.message,
                        },{
                            type: 'danger',
                        });
                    }
                },
                error: function(data) {
                    console.log(data);
                },
        
            });
        }
        
    });
    
</script>	

@include('dashboard.footer')