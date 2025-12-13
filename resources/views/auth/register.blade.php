<!DOCTYPE html>


<html lang="en-US" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.">
    <link rel="shortcut icon" href="account/images/favicon.jpeg" type="image/x-icon">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="account/images/favicon.jpeg">
    <!-- Page Title  -->
    <title>Register | Welcome to Rezon Security Bank</title>
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

<body class="nk-body npc-crypto bg-white pg-auth">
    <div class="nk-content">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-feature-conten p-3">
                    <a href="https://rezonsecuritybk.com"> <img src="{{asset('dash/logo.png')}}" width="230" class="p-3"></a>
                </div>
            </div>
            <div class="card card-bordered s-4 col-lg-12 p-0">
                <div class="card-header font-weight-bold text-light" style="background-color:#033d75;">
                    <h5 class="text-white"><em class="icon ni ni-user-add-fill"></em> Kindly provide the information requested below to enable us create an account for you.</h5>
                </div>
                <form action="{{route('register')}}" method="post" enctype="multipart/form-data" >
                @csrf   
                <div class="card-body">
                        <b>Personal Details</b>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">First Name</label>
                                    <input type="text" class="form-control"  name="first_name" value="{{ old('first_name')}}" 
                    class="form-control @error('first_name') is-invalid @enderror"  placeholder="First Name" required>
                <script>
    if ("{{ $errors->has('first_name') }}") {
        var errorMessage = "{{ $errors->first('first_name') }}";
        toastr.error(errorMessage);
    }
    </script>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Middle name</label>
                                    <input type="text" class="form-control"  name="middle_name" value="{{ old('middle_name')}}"
                    class="form-control @error('middle_name') is-invalid @enderror"   placeholder="Middle Name" required>
                                </div>
                                <script>
    if ("{{ $errors->has('middle_name') }}") {
        var errorMessage = "{{ $errors->first('middle_name') }}";
        toastr.error(errorMessage);
    }
    </script>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Last Name</label>
                                    <input type="text" class="form-control" value="{{ old('last_name')}}" 
                    class="form-control @error('last_name') is-invalid @enderror"  name="last_name" placeholder="Last Name" required>
                                </div>
                                <script>
    if ("{{ $errors->has('last_name') }}") {
        var errorMessage = "{{ $errors->first('last_name') }}";
        toastr.error(errorMessage);
    }
    </script>
                            </div>


<label class="form-label col-lg-12">Address</label>

<div class="form-group col-sm-4">

    <label class="form-label" for="city">Country</label>
    <select 
                    class="form-control @error('country') is-invalid @enderror"  name="country" class="countries form-control"  required>
<option value="Afganistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
            <option value="Argentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bonaire">Bonaire</option>
            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Brazil">Brazil</option>
            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Canary Islands">Canary Islands</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Channel Islands">Channel Islands</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos Island">Cocos Island</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote DIvoire">Cote D'Ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Curaco">Curacao</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="East Timor">East Timor</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands">Falkland Islands</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Ter">French Southern Ter</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Great Britain">Great Britain</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Isle of Man">Isle of Man</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea North">Korea North</option>
            <option value="Korea Sout">Korea South</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Laos">Laos</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libya">Libya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macau">Macau</option>
            <option value="Macedonia">Macedonia</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Malawi">Malawi</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Midway Islands">Midway Islands</option>
            <option value="Moldova">Moldova</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Nambia">Nambia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherland Antilles">Netherland Antilles</option>
            <option value="Netherlands">Netherlands (Holland, Europe)</option>
            <option value="Nevis">Nevis</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau Island">Palau Island</option>
            <option value="Palestine">Palestine</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Phillipines">Philippines</option>
            <option value="Pitcairn Island">Pitcairn Island</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Republic of Montenegro">Republic of Montenegro</option>
            <option value="Republic of Serbia">Republic of Serbia</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Rwanda">Rwanda</option>
            <option value="St Barthelemy">St Barthelemy</option>
            <option value="St Eustatius">St Eustatius</option>
            <option value="St Helena">St Helena</option>
            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
            <option value="St Lucia">St Lucia</option>
            <option value="St Maarten">St Maarten</option>
            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
            <option value="Saipan">Saipan</option>
            <option value="Samoa">Samoa</option>
            <option value="Samoa American">Samoa American</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia">Serbia</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syria</option>
            <option value="Tahiti">Tahiti</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Thailand">Thailand</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Erimates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States of America">United States of America</option>
            <option value="Uraguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Vatican City State">Vatican City State</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
            <option value="Wake Island">Wake Island</option>
            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
            <option value="Yemen">Yemen</option>
            <option value="Zaire">Zaire</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
<option value="">Select Country</option>
</select>
<script>
    if ("{{ $errors->has('country') }}") {
        var errorMessage = "{{ $errors->first('country') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>


</>

<div class="form-group col-sm-4">
    <label class="form-label" for="city">City</label>
    <input name="city" class="cities form-control" 
                    class="form-control @error('city') is-invalid @enderror"  value="{{old('city')}}" Placeholder='City' required>
    <script>
    if ("{{ $errors->has('city') }}") {
        var errorMessage = "{{ $errors->first('city') }}";
        toastr.error(errorMessage);
    }
    </script>
    <!--<option value="">Select City</option>-->
    <!--</select>-->
</div>

</body>

</html>


<div class="col-md-2">
<div class="form-group">
<label class="form-label" for="phone-no">Date of Birth</label>
<input type="text" class="form-control date-picker" 
                    class="form-control @error('date_of_birth') is-invalid @enderror"   name="date_of_birth" value="{{ old('date_of_birth')}}" placeholder="Date of Birth" required>
</div>
<script>
    if ("{{ $errors->has('date_of_birth') }}") {
        var errorMessage = "{{ $errors->first('date_of_birth') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>
<div class="col-md-8">
<div class="form-group">
<label class="form-label" for="phone-no">House Address</label>
<input type="text" class="form-control" 
                    class="form-control @error('home_address') is-invalid @enderror"   name="home_address" value="{{ old('home_address')}}" placeholder="House address" required>
</div>
<script>
    if ("{{ $errors->has('house_address') }}") {
        var errorMessage = "{{ $errors->first('house_address') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="form-label" for="phone-no">Phone Number</label>
<input type="text" class="form-control" 
                    class="form-control @error('phone_number') is-invalid @enderror"  name="phone_number"  value="{{ old('phone_number')}}" placeholder="Phone Number" required>
</div>
<script>
    if ("{{ $errors->has('phone_number') }}") {
        var errorMessage = "{{ $errors->first('phone_number') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="form-label" for="phone-no">Email address</label>
<input type="email" class="form-control" 
                    class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email')}}" placeholder="Enter Email address" required>
</div>
<script>
    if ("{{ $errors->has('email') }}") {
        var errorMessage = "{{ $errors->first('email') }}";
        toastr.error(errorMessage);
    }
    </script>

</div>
</div>
<hr>
<b>Employment information</b>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="form-label" for="phone-no">Occupation</label>
<select type="text" 
                    class="form-control @error('occupation') is-invalid @enderror"  class="form-control" name="occupation" value="" required>
<option value="">Select Type of Employment</option>
<option value="Self Employed">Self Employed</option>  
<option value="Self Employed">Public/Government Office</option>  
<option value="Self Employed">Private/Partnership Office</option>  
<option value="Self Employed">Business/Sales</option>  
<option value="Self Employed">Trading/Market</option>  
<option value="Self Employed">Military/Paramilitary</option>  
<option value="Self Employed">Politician/Celebrity</option>  
</select>
</div>
<script>
    if ("{{ $errors->has('occupation') }}") {
        var errorMessage = "{{ $errors->first('occupation') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>

</div>
<hr>
<b>Banking  Details</b>
<hr>
<div class="row ">


<div class="col-md-4 ">
<div class="form-group ">
<label class="form-label " for="phone-no ">Account Type</label>
<select type="text " class="form-control " 
                    class="form-control @error('account_type') is-invalid @enderror"  name="account_type"  required>
<option value=" ">Please select Account Type</option> 
<option value="Checking Account ">Checking Account</option>
<option value="Savings Account ">Saving Account</option>
<option value="Fixed Deposit Account ">Fixed Deposit Account</option>
<option value="Current Account ">Current Account</option>
<option value="Crypto Currency Account ">Crypto Currency Account</option>
<option value="Business Account ">Business Account</option>
<option value="Non Resident Account ">Non Resident Account</option>
<option value="Cooperate Business Account ">Cooperate Business Account</option>
<option value="Investment Account ">Investment Account</option>
</select>

</div>
<script>
    if ("{{ $errors->has('account_type') }}") {
        var errorMessage = "{{ $errors->first('account_type') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>
<div class="col-md-4 ">
<div class="form-group ">
<label class="form-label " for="phone-no ">Account Currency</label>
<select type="text " 
                    class="form-control @error('currency') is-invalid @enderror"  class="form-control "  name="currency">
<option value="USD ">America (United States) Dollars – USD</option>
<option value="AFN ">Afghanistan Afghanis – AFN</option>
<option value="ALL ">Albania Leke – ALL</option>
<option value="DZD ">Algeria Dinars – DZD</option>
<option value="ARS ">Argentina Pesos – ARS</option>
<option value="AUD ">Australia Dollars – AUD</option>
<option value="ATS ">Austria Schillings – ATS</option>

<option value="BSD ">Bahamas Dollars – BSD</option>
<option value="BHD ">Bahrain Dinars – BHD</option>
<option value="BDT ">Bangladesh Taka – BDT</option>
<option value="BBD ">Barbados Dollars – BBD</option>
<option value="BEF ">Belgium Francs – BEF</option>
<option value="BMD ">Bermuda Dollars – BMD</option>

<option value="BRL ">Brazil Reais – BRL</option>
<option value="BGN ">Bulgaria Leva – BGN</option>
<option value="CAD ">Canada Dollars – CAD</option>
<option value="XOF ">CFA BCEAO Francs – XOF</option>
<option value="XAF ">CFA BEAC Francs – XAF</option>
<option value="CLP ">Chile Pesos – CLP</option>

<option value="CNY ">China Yuan Renminbi – CNY</option>
<option value="CNY ">RMB (China Yuan Renminbi) – CNY</option>
<option value="COP ">Colombia Pesos – COP</option>
<option value="XPF ">CFP Francs – XPF</option>
<option value="CRC ">Costa Rica Colones – CRC</option>
<option value="HRK ">Croatia Kuna – HRK</option>

<option value="CYP ">Cyprus Pounds – CYP</option>
<option value="CZK ">Czech Republic Koruny – CZK</option>
<option value="DKK ">Denmark Kroner – DKK</option>
<option value="DEM ">Deutsche (Germany) Marks – DEM</option>
<option value="DOP ">Dominican Republic Pesos – DOP</option>
<option value="NLG ">Dutch (Netherlands) Guilders – NLG</option>

<option value="XCD ">Eastern Caribbean Dollars – XCD</option>
<option value="EGP ">Egypt Pounds – EGP</option>
<option value="EEK ">Estonia Krooni – EEK</option>
<option value="EUR ">Euro – EUR</option>
<option value="FJD ">Fiji Dollars – FJD</option>
<option value="FIM ">Finland Markkaa – FIM</option>

<option value="FRF* ">France Francs – FRF*</option>
<option value="DEM ">Germany Deutsche Marks – DEM</option>
<option value="XAU ">Gold Ounces – XAU</option>
<option value="GRD ">Greece Drachmae – GRD</option>
<option value="GTQ ">Guatemalan Quetzal – GTQ</option>
<option value="NLG ">Holland (Netherlands) Guilders – NLG</option>
<option value="HKD ">Hong Kong Dollars – HKD</option>

<option value="HUF ">Hungary Forint – HUF</option>
<option value="ISK ">Iceland Kronur – ISK</option>
<option value="XDR ">IMF Special Drawing Right – XDR</option>
<option value="INR ">India Rupees – INR</option>
<option value="IDR ">Indonesia Rupiahs – IDR</option>
<option value="IRR ">Iran Rials – IRR</option>

<option value="IQD ">Iraq Dinars – IQD</option>
<option value="IEP* ">Ireland Pounds – IEP*</option>
<option value="ILS ">Israel New Shekels – ILS</option>
<option value="ITL* ">Italy Lire – ITL*</option>
<option value="JMD ">Jamaica Dollars – JMD</option>
<option value="JPY ">Japan Yen – JPY</option>

<option value="JOD ">Jordan Dinars – JOD</option>
<option value="KES ">Kenya Shillings – KES</option>
<option value="KRW ">Korea (South) Won – KRW</option>
<option value="KWD ">Kuwait Dinars – KWD</option>
<option value="LBP ">Lebanon Pounds – LBP</option>
<option value="LUF ">Luxembourg Francs – LUF</option>

<option value="MYR ">Malaysia Ringgits – MYR</option>
<option value="MTL ">Malta Liri – MTL</option>
<option value="MUR ">Mauritius Rupees – MUR</option>
<option value="MXN ">Mexico Pesos – MXN</option>
<option value="MAD ">Morocco Dirhams – MAD</option>
<option value="NLG ">Netherlands Guilders – NLG</option>

<option value="NZD ">New Zealand Dollars – NZD</option>
<option value="NGN ">Nigeria Naira – NGN</option>
<option value="NOK ">Norway Kroner – NOK</option>
<option value="OMR ">Oman Rials – OMR</option>
<option value="PKR ">Pakistan Rupees – PKR</option>
<option value="XPD ">Palladium Ounces – XPD</option>
<option value="PEN ">Peru Nuevos Soles – PEN</option>

<option value="PHP ">Philippines Pesos – PHP</option>
<option value="XPT ">Platinum Ounces – XPT</option>
<option value="PLN ">Poland Zlotych – PLN</option>
<option value="PTE ">Portugal Escudos – PTE</option>
<option value="QAR ">Qatar Riyals – QAR</option>
<option value="RON ">Romania New Lei – RON</option>

<option value="ROL ">Romania Lei – ROL</option>
<option value="RUB ">Russia Rubles – RUB</option>
<option value="SAR ">Saudi Arabia Riyals – SAR</option>
<option value="XAG ">Silver Ounces – XAG</option>
<option value="SGD ">Singapore Dollars – SGD</option>
<option value="SKK ">Slovakia Koruny – SKK</option>

<option value="SIT ">Slovenia Tolars – SIT</option>
<option value="ZAR ">South Africa Rand – ZAR</option>
<option value="KRW ">South Korea Won – KRW</option>
<option value="ESP ">Spain Pesetas – ESP</option> 

<option value="SDD ">Sudan Dinars – SDD</option>
<option value="SEK ">Sweden Kronor – SEK</option>
<option value="CHF ">Switzerland Francs – CHF</option>
<option value="TWD ">Taiwan New Dollars – TWD</option>
<option value="THB ">Thailand Baht – THB</option>
<option value="TTD ">Trinidad and Tobago Dollars – TTD</option>

<option value="TND ">Tunisia Dinars – TND</option>
<option value="TRY ">Turkey New Lira – TRY</option>
<option value="AED ">United Arab Emirates Dirhams – AED</option>
<option value="GBP ">United Kingdom Pounds – GBP</option>
<option value="USD ">United States Dollars – USD</option>
<option value="VEB ">Venezuela Bolivares – VEB</option>

<option value="VND ">Vietnam Dong – VND</option>
<option value="ZMK ">Zambia Kwacha – ZMK</option>     </select>
</div>
<script>
    if ("{{ $errors->has('currency') }}") {
        var errorMessage = "{{ $errors->first('currency') }}";
        toastr.error(errorMessage);
    }
    </script>
</div>

                    

     <div class="col-md-4 ">
   <div class="form-group ">
    <label class="form-label " for="phone-no ">Password</label>
     <input type="password " 
                    class="form-control @error('password') is-invalid @enderror"  class="form-control"  name="password" value="{{ old('password') }}"  required>
    </div>
    <script>
    if ("{{ $errors->has('password') }}") {
        var errorMessage = "{{ $errors->first('password') }}";
        toastr.error(errorMessage);
    }
    </script>
   </div>
     <div class="col-md-4 ">
   <div class="form-group ">
    <label class="form-label " for="phone-no ">Confirm Password</label>
     <input type="password " 
                    class="form-control @error('password_confirmation') is-invalid @enderror"  class="form-control"  name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm password " required>
    </div>
    <script>
    if ("{{ $errors->has('password_confirmation') }}") {
        var errorMessage = "{{ $errors->first('password_confirmation') }}";
        toastr.error(errorMessage);
    }
    </script>
   </div>

   <div class="col-md-4 ">
   <div class="form-group ">
    <label class="form-label " for="phone-no ">Passport Photograph</label>
     <img src="account/passport/sample.png " style="width:100%; height:180px; " id="output_image ">
     <input type="file" class="form-control "  name="passport" accept="image/* " onchange="preview_image(event) " required>
    </div>
    <script>
    if ("{{ $errors->has('passport') }}") {
        var errorMessage = "{{ $errors->first('passport') }}";
        toastr.error(errorMessage);
    }
    </script>
   </div>
</div>

<div id="registerResult "></div>
</div>
<div class="card-footer ">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset " class="btn btn-danger">Reset</button>
    <button type="button " onclick="window.history.go(-1); " class="btn btn-default "><em class="icon ni ni-arrow-left "></em> back</button>
</div> 

</form> 
</div>
<!-- JavaScript -->
  <script src="account/js/jquery.min.js "></script>
    <script type="text/javascript ">
    $(document).ready(function (e) {
    $("#registerForm ").on('submit',(function(e) {
        document.getElementById("btn ").disabled = true;
        e.preventDefault();
        $.ajax({
            url: "account/scripts/auth?action=registerUserAccount ",
            type: "POST ",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
            $("#registerResult ").html(data);
            document.getElementById("btn ").disabled = false;
            },
            error: function()
            {
            }           
       });
    }));
});

    //IMAGE PREVIEW
 function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}   

  </script>
    <script src="account/assets/js/bundle.js?ver=2.4.0 "></script>
    <script src="account/assets/js/scripts.js?ver=2.4.0 "></script>
   <script src="account/js/vendors/sweetalert.js "></script>
    <script src="account/assets/js/custom.js "></script>
   <script src="account/js/toastr.js "></script>
</body>
</html>