  

<!DOCTYPE html>
<html lang="en-US" class="js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>  
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta property="og:title" content="rezonsecuritybk.com">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="../logo.html">
    <meta property="og:url" content="../index.html">
    <meta name="twitter:card" content="">
    <!--  Non-Essential, But Recommended -->
    <meta property="og:description" content="This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.">
    <meta property="og:site_name" content="rezonsecuritybk.com">
    <meta name="twitter:image:alt" content="">
    <title>rezonsecuritybk.com - </title>
    <meta name="description" content="This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.">
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dash/favicon.png')}}" />
    <!-- Page Title  -->
    <title>Welcome to  |  rezonsecuritybk.com</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="auth/assets/css/dashlite8d5a.css?ver=2.4.0">
    <link rel="stylesheet" href="auth/scss/sweetalert.css">
    <link id="skin-default" rel="stylesheet" href="auth/assets/css/theme8d5a.css?ver=2.4.0">
    <link href="auth/css/toastr.css" rel="stylesheet"/>
     <!-- toastr-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="../../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
    <style>
.goog-te-gadget-simple {
border:none;
}
.goog-te-gadget-simple a {
color:#000;
}
</style>
<style type="text/css">
    .btn-primary{
        background-color: #033d75;
    }
    .btn-secondary{
        background-color: #d13636;
    }
    .btn-secondary:hover{opacity: 0.6;}
    .btn-primary:hover{opacity: 0.6;}
</style>
<body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
   

 
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="#" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{asset('dash/logo.png')}}" srcset="{{asset('dash/logo.png')}}" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{asset('dash/logo.png')}}" srcset="{{asset('dash/logo.png')}}" alt="logo-dark">
                        </a>
                    </div>
               
                    <br>
                                        <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title">Welcome</h3>
                            <div class="nk-block-des alert alert-pro alert-primary">
                                <p class="alert-text">Please confirm you are not a Robot by verifying the auto-generated code below, This will enable you have  access to CPB Online banking channels.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form id='verify_captcha'>
                    @csrf
        <div class="form-group">
        <link href="https://fonts.googleapis.com/css?family=Henny+Penny&amp;display=swap" rel="stylesheet">
        <div style="height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #033d75; color: #ffffff!important; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;" class="captcha">
            <span style="    float:left;     -webkit-transform: rotate(55deg);">{{$firstNumber}}</span>
            <span style="    float:left;     -webkit-transform: rotate(17deg);">{{$secondNumber}}</span>
            <span style="    float:left;     -webkit-transform: rotate(-56deg);">{{$thirdNumber}}</span>
            <span style="    float:left;     -webkit-transform: rotate(-51deg);">{{$fourthNumber}}</span>
            <span style="    float:left;     -webkit-transform: rotate(0deg);">{{$fifthNumber}}</span>
            <span style="    float:left;     -webkit-transform: rotate(-45deg);">{{$sixthNumber}}</span>
        </div>
        <input type="hidden" name="captcha_secret" value="{{$captcha_secret}}"></div>

    <div class="form-group">
        <input type="text" name="captcha" id="captcha" class="form-control form-control-xl" placeholder="Enter code" autocomplete="off" required>
    </div>   
    <div id="verifyResult">

    </div>
     <div class="form-group">
        <button class="btn btn-lg btn-primary btn-block secretFom" id="btn" type="submit" >Verify code</button>
    </div>
        </form>
                                
                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <a href="#" style=""><div id="google_translate_element"></div> </a>
                   <div class="mt-3">
                        <p>&copy; 2024 Rezon Security Bank. All Rights Reserved.</p>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->

           <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="images/security.html" srcset="images/security.svg 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Protect your online banking.</h4>
                                    <p>We have security measures in place to safeguard your money, because we are committed to providing you with a secure banking experience. When we come across any hoaxes or scams that target customers, we will raise them to your attention.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="images/banking.html" srcset="images/banking.svg 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>rezonsecuritybk.com</h4>
                                    <p>We'll never send an email containing a link to rezonsecuritybk.com.<br> 
                                      We'll never ask for your passwords or Secret Code.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="auth/images/onlinebanking.html" srcset="images/onlinebanking.svg 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>rezonsecuritybk.com</h4>
                                    <p>When accessing Rezon Security BANK, always open a new browser window and type rezonsecuritybk.com</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <script src="auth/js/jquery.min.js"></script>
    <script type="auth/text/javascript"></script>
  
      
    <script src="auth/assets/js/bundle8d5a.js?ver=2.4.0"></script>
    <script src="auth/assets/js/scripts8d5a.js?ver=2.4.0"></script>
   <script src="auth/js/vendors/sweetalert.js"></script>
   <script src="auth/assets/js/custom.js"></script>
   <script src="auth/js/toastr.js"></script>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#verify_captcha').on('submit', function(e) {
            e.preventDefault();
            var captcha_secret = $('#captcha_secret').val();
            var captcha = $('#captcha').val();
            $.ajax({
                type: "POST",
                url: '{{ route("verify.captcha") }}',
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    $('.logout').html(data.content);
                    if (data.content === 'correct') {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        };
                        toastr.success("Verification Successful",  "Verified",);
                        window.location.href = '../login';
                    } else if (data.content === 'Error') {
                        toastr.options = {
                            "closeButton": true,
                            "progressBar": true
                        };
                        toastr.error("Invalid Code Supplied",  "Error");
                        window.location.href = '../verify';
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
