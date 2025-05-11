@extends('templates.mainLayoutUser')

@section('title', 'Akun')

@section('konten')
<!-- Profile 1 - Bootstrap Brain Component -->
<section class="bg-secondary-subtle py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Profil Pengguna</h2>
                <p class="text-secondary text-center lead fs-4 mb-5">
                    Halaman Profil adalah pusat informasi pribadi Anda di GIZIKU. Di sini Anda dapat mengatur data diri,
                    memperbarui informasi kesehatan, serta menyiapkan preferensi untuk konsultasi gizi.
                </p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-success">\

                {{-- Error Alert --}}
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i>
                        <div>
                            <strong>Terjadi kesalahan:</strong>
                            <ul class="mb-0 mt-1">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- Success Alert --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                        <div>
                            {{ session('success') }}
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-4 gy-lg-0">
            <div class="col-12 col-lg-4 col-xl-3">
                <div class="row gy-4">
                    <div class="col-12">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-header text-bg-success">Selamat Datang, Ethan Leo</div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}"
                                        class="rounded-circle img-thumbnail" alt="Ethan Leo"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                                <h5 class="text-center mb-1">Ethan Leo</h5>
                                <p class="text-center text-secondary mb-4">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-header text-bg-success">Social Accounts</div>
                            <div class="card-body">
                                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#!" class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="card widget-card border-light shadow-sm">
                    <div class="card-body p-4">
                        <ul class="nav nav-tabs" id="profileTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                    data-bs-target="#overview-tab-pane" type="button" role="tab"
                                    aria-controls="overview-tab-pane" aria-selected="true"
                                    style="color: rgb(12, 141, 98)">Latar Belakang</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false"
                                    style="color: rgb(12, 141, 98)">Profil</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                    data-bs-target="#password-tab-pane" type="button" role="tab"
                                    aria-controls="password-tab-pane" aria-selected="false"
                                    style="color: rgb(12, 141, 98)">Reset Password</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-4" id="profileTabContent">
                            <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel"
                                aria-labelledby="overview-tab" tabindex="0">
                                <h5 class="mb-3">Profile</h5>
                                <div class="row g-0">
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Nama Depan</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">Ethan</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Nama Belakang</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">Leo</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Pendidikan</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">M.S Computer Science</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Alamat</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">Mountain View, California</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Negara</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">United States</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Pekerjaan</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">Project Manager</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Riwayat Penyakit</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">GitHub Inc</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">No HP</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">+1 (248) 679-8745</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Email</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">leo@example.com</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                <form action="{{ route('akun.update') }}" method="POST" enctype="multipart/form-data"
                                    class="row gy-3 gy-xxl-4">
                                    <div class="col-12">
                                        <div class="row gy-2">
                                            <label class="col-12 form-label m-0">Foto Profil</label>
                                            <div class="col-12">
                                                <img src="" class="img-fluid" alt="User Name">
                                            </div>
                                            <div class="col-12 d-flex gap-2">
                                                <!-- Tombol Upload -->
                                                <label for="uploadFoto"
                                                    class="d-inline-block bg-primary link-light lh-1 p-2 rounded"
                                                    style="cursor: pointer;">
                                                    <i class="bi bi-upload"></i>
                                                </label>
                                                <input type="file" name="profile_picture" id="uploadFoto"
                                                    class="d-none">

                                                <!-- Tombol Hapus (opsional fungsinya via JS) -->
                                                <button type="button"
                                                    class="d-inline-block bg-danger link-light lh-1 p-2 rounded border-0">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputFirstName" class="form-label">Nama Depan</label>
                                        <input type="text" class="form-control" id="inputFirstName" value="" name="first_name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputLastName" class="form-label">Nama Belakang</label>
                                        <input type="text" class="form-control" id="inputLastName" value="" name="last_name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputEducation" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="inputEducation"
                                            value="" name="education">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputJob" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputJob" value="" name="job">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="riwayatPenyakit" class="form-label">Riwayat Penyakit</label>
                                        <textarea type="text" class="form-control" id="riwayatPenyakit" name="disease_history"> </textarea>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputPhone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="inputPhone" name="phone">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail"
                                            name="email">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputAddress" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            name="address">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputCountry" class="form-label">Negara</label>
                                        <select class="form-select" id="inputCountry" name="country">
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
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
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean
                                                Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
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
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                                Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
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
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                            </option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories
                                            </option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                                Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                            </option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The
                                                Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States
                                                of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory,
                                                Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                                Grenadines</option>
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
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia
                                                and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                            </option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States" selected>United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor
                                                Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputYouTube" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="inputYouTube"
                                            name="instagram">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputX" class="form-label">X</label>
                                        <input type="text" class="form-control" id="inputX"
                                            name="x_account">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputFacebook" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="inputFacebook"
                                            name="facebook">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputLinkedIn" class="form-label">LinkedIn</label>
                                        <input type="text" class="form-control" id="inputLinkedIn"
                                            name="linkedin">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Submit Perubahan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="password-tab-pane" role="tabpanel"
                                aria-labelledby="password-tab" tabindex="0">
                                <form action="#!">
                                    <div class="row gy-3 gy-xxl-4">
                                        <div class="col-12">
                                            <label for="currentPassword" class="form-label">Password Saat Ini</label>
                                            <input type="password" class="form-control" id="currentPassword">
                                        </div>
                                        <div class="col-12">
                                            <label for="newPassword" class="form-label">Password Baru</label>
                                            <input type="password" class="form-control" id="newPassword">
                                        </div>
                                        <div class="col-12">
                                            <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="confirmPassword">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Ubah Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
