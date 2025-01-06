<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeyBlade Giveaway</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div class="pd-wrap">
        <header class="header">
            <div class="container-fluid">
                <div class="row navbar p-3">
                    <div class="col-3">
                        <img src="{{ asset('assets/logo.png') }}" class="logo" alt="">
                    </div>
                    <div class="col-6 text-center text-white">
                        <h2>Free BeyBlade Giveaway​</h2>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </header>
        <div class="minibar p-1 mb-4">
            <div class="col text-center text-white align-middle p-1">
                <h5>Every week we select subscribers who do what the videos say and send free Beyblade to them... so
                    subscribe!!!​</h5>
            </div>
        </div>
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-6">
                    <div class = "product-imgs">
                        <div class = "img-display">
                            <div class = "img-showcase">
                                <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg"
                                    alt = "shoe image">
                                <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg"
                                    alt = "shoe image">
                                <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg"
                                    alt = "shoe image">
                                <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                                    alt = "shoe image">
                            </div>
                        </div>
                        <div class = "img-select">
                            <div class = "img-item">
                                <a href = "#" data-id = "1">
                                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg"
                                        alt = "shoe image">
                                </a>
                            </div>
                            <div class = "img-item">
                                <a href = "#" data-id = "2">
                                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg"
                                        alt = "shoe image">
                                </a>
                            </div>
                            <div class = "img-item">
                                <a href = "#" data-id = "3">
                                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg"
                                        alt = "shoe image">
                                </a>
                            </div>
                            <div class = "img-item">
                                <a href = "#" data-id = "4">
                                    <img src = "https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                                        alt = "shoe image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-dtl">
                        <div class="product-info text-center">
                            <h5>FOLLOW THESE STEPS TO GET YOUR FREE BEYBLADE</h5>
                            <hr class="rule">
                        </div>
                        <div class="row p-3">
                            <div class="col-4">
                                <button disabled="disabled" class="btn btn-success">Step 01</button>
                            </div>
                            <div class="col-6">
                                <p>Subscribe to the channel</p>
                            </div>
                            <div class="col-2">
                                <a href="http://">
                                    <img src="{{ asset('assets/youtube.png') }}" class="icons" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-4">
                                <button disabled="disabled" class="btn btn-success">Step 02</button>
                            </div>
                            <div class="col-6">
                                <p>Share with 3 friends</p>
                            </div>
                            <div class="col-2">
                                <a href="http://">
                                    <img src="{{ asset('assets/share.png') }}" class="icons" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-4">
                                <button disabled="disabled" class="btn btn-success">Step 03</button>
                            </div>
                            <div class="col-6">
                                <p>Comment our latest video</p>
                            </div>
                            <div class="col-2">
                                <a href="http://">
                                    <img src="{{ asset('assets/facebook.png') }}" class="icons" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-dtl pt-2">
                        <div class="product-info text-center">
                            <h5>Submit the form below</h5>
                            <hr class="rule">
                        </div>
                        <form class="form-horizontal" action="{{ route('giveaway.submit') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row pl-3 pr-3 form-group">
                                <div class="col-lg-6">
                                    <label for="fname">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="inputs form-control"
                                        placeholder="Kim" required value="{{ old('fname') }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="lname">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="lname" class="inputs form-control"
                                        placeholder="Coleman" required value="{{ old('lname') }}">
                                </div>
                            </div>
                            <div class="row pl-3 pr-3 pb-3">
                                <div class="col-md-6">
                                    <label for="address1">Address 1 <span class="text-danger">*</span></label>
                                    <input type="text" name="address1" class="inputs form-control"
                                        placeholder="123 Street" required value="{{ old('address1') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="address2">Address 2</label>
                                    <input type="text" name="address2" class="inputs form-control"
                                        value="{{ old('address2') }}">
                                </div>
                            </div>
                            <div class="row pl-3 pr-3 pb-3">
                                <div class="col-md-6">
                                    <label for="city">City <span class="text-danger">*</span></label>
                                    <input type="text" name="city" class="inputs form-control"
                                        placeholder="New York" required value="{{ old('city') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="state">State <span class="text-danger">*</span></label>
                                    <input type="text" name="state" class="inputs form-control"
                                        placeholder="NY" required value="{{ old('state') }}">
                                </div>
                            </div>
                            <div class="row pl-3 pr-3 pb-3">
                                <div class="col-md-6">
                                    <label for="postalcode">Postal Code <span class="text-danger">*</span></label>
                                    <input type="text" name="postalcode" class="inputs form-control"
                                        placeholder="10001" required value="{{ old('postalcode') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="inputs form-control"
                                        placeholder="1234567890" required value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="row pl-3 pr-3 pb-3">
                                <div class="col-md-6">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="inputs form-control"
                                        placeholder="kimcole@mydomain.com" required value="{{ old('email') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="country">Country <span class="text-danger">*</span></label>
                                    <select id="country" name="country" class=" form-control">
                                        <option value="">Select a Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="South Korea">South Korea</option>
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
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row pl-3 pr-3 pb-3">
                                <div class="col text-center">
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
