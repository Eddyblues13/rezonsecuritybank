<!DOCTYPE html>
<html lang="en-US" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.">
    <link rel="shortcut icon" href="account/images/favicon.jpeg" type="image/x-icon">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="account/images/favicon.jpeg">
    <!-- Page Title  -->
    <title>Home | Welcome to Rezon Security Bank</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="account/assets/css/dashlite.css?ver=2.4.0">
    <link rel="stylesheet" href="account/scss/sweetalert.css">
    <link id="skin-default" rel="stylesheet" href="account/assets/css/theme.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="account/assets/css/theme.css?ver=2.4.0">
    <link href="account/css/toastr.css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dash/favicon.png')}}" />

    <link rel="stylesheet" href="{{asset('assets1/css/dashlite.css')}}">
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

</head>
<script type="text/javascript">
    function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<style>
    .goog-te-gadget-simple {
        border: none;
    }

    .goog-te-gadget-simple a {
        color: #000;
    }
</style>
<style type="text/css">
    .btn-primary {
        background-color: #033d75;
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
<style>
    input[type=number] {
        height: 50px;
        width: 50px;
        font-size: 25px;
        color: #033d75;
        text-align: center;
        border: 3px solid #033d75;
        box-shadow: 4px #033d75;
        border-radius: 7px;
        font-weight: 600;
    }

    input[type=number]:focus {
        border-bottom: 5px solid #008000;

    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em
                            class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="account/" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{asset('dash/logo.png')}}"
                                srcset="{{asset('dash/logo.png')}}" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{asset('dash/logo.png')}}"
                                srcset="{{asset('dash/logo.png')}}" alt="logo-dark">
                        </a>
                    </div>

                    <br>


                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title">Sign-In</h3>
                            <div class="nk-block-des alert alert-pro alert-primary">
                                <p class="alert-text">Access the Rezon Security Bank panel using your Account ID and
                                    password.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Account ID</label>
                            </div>
                            <input type="text" class="form-control form-control-lg" required autocomplete="off" id="id"
                                placeholder="Enter your Account ID" value="{{ old('account_number') }}"
                                name="account_number">
                            <script>
                                if ("{{ $errors->has('account_number') }}") {
        var errorMessage = "{{ $errors->first('account_number') }}";
        toastr.error(errorMessage);
    }
                            </script>

                        </div><!-- foem-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Passsword</label>
                                <a class="link link-primary link-sm" tabindex="-1"
                                    href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch"
                                    data-target="pass">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" id="pass" required
                                    placeholder="Enter your password" value="{{ old('password') }}" name="password">
                            </div>
                            <div id="loginResult"></div>
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Continue</button>
                        </div>
                    </form><!-- form -->
                    <center class="p-3">
                        <a href="{{route('terms')}}" class="btn btn-sm btn-secondary"><em class="icon ni ni-regen"></em>
                            Enroll for Online Banking</a>
                    </center>
                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <a href="#" style="">
                        <div id="google_translate_element"></div>
                    </a>
                    <div class="mt-3">
                        <p>&copy; 2024 Rezon Security Bank. All Rights Reserved.</p>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="account/images/security.svg"
                                        srcset="account/images/security.svg 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Protect your online banking.</h4>
                                    <p>We have security measures in place to safeguard your money, because we are
                                        committed to providing you with a secure banking experience. When we come across
                                        any hoaxes or scams that target customers, we will raise them to your attention.
                                    </p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="account/images/banking.svg"
                                        srcset="account/images/banking.svg 2x" alt="">
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
                                    <img class="round" src="account/images/onlinebanking.svg"
                                        srcset="account/images/onlinebanking.svg 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>rezonsecuritybk.com</h4>
                                    <p>When accessing Rezon Security Bank, always open a new browser window and type
                                        rezonsecuritybk.com</p>
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
    <script src="account/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (e) {
    $("#loginForm").on('submit',(function(e) {
        document.getElementById("btn").disabled = true;
        e.preventDefault();
        $.ajax({
            url: "account/scripts/auth?action=userLogin",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            $("#loginResult").html(data);
            document.getElementById("btn").disabled = false;
            },
            error: function()
            {
            }           
       });
    }));
});
//2FA FORM VERIFICATION
     $(document).ready(function (e) {
    $("#2faForm").on('submit',(function(e) {
        document.getElementById("btn").disabled = true;
        e.preventDefault();
        $.ajax({
            url: "account/scripts/auth?action=userVerify2fa",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            $("#loginResult").html(data);
            document.getElementById("btn").disabled = false;
            },
            error: function()
            {
            }           
       });
    }));
});

//USER PASSWORD RESET
     $(document).ready(function (e) {
    $("#resetForm").on('submit',(function(e) {
        document.getElementById("btn").disabled = true;
        e.preventDefault();
        $.ajax({
            url: "account/scripts/auth?action=userPassReset&code=359617",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            $("#resetResult").html(data);
            document.getElementById("btn").disabled = false;
            },
            error: function()
            {
            }           
       });
    }));
});



//2FA INPUTS
function getCodeBoxElement(index) {
        return document.getElementById('codeBox' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 4) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }
      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }
var max_chars = 1;

$('#codeBox1').keydown( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('#codeBox1').keyup( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});
$('#codeBox2').keydown( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('#codeBox2').keyup( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});
$('#codeBox3').keydown( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('#codeBox3').keyup( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});
$('#codeBox4').keydown( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('#codeBox4').keyup( function(e){
    if ($(this).val().length >= max_chars) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});
    </script>
    <script src="account/assets/js/bundle.js?ver=2.4.0"></script>
    <script src="account/assets/js/scripts.js?ver=2.4.0"></script>
    <script src="account/js/vendors/sweetalert.js"></script>
    <script src="account/assets/js/custom.js"></script>
    <script src="account/js/toastr.js"></script>
</body>

</html>