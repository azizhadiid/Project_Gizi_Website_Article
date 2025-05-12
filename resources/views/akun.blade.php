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
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-success">

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
                <div class="alert alert-success border-0 shadow-sm rounded-4 px-4 py-3 d-flex align-items-center gap-3 position-relative fade show mt-3"
                    style="background-color: #e6f9ed; color: #256029;" role="alert">
                    <i class="bi bi-check-circle-fill fs-4" style="color: #198754;"></i>
                    <div class="flex-grow-1">
                        <strong>Sukses!</strong> {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="alert"
                        aria-label="Close"></button>
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
                            <div class="card-header text-bg-success">Selamat Datang,
                                {{ old('first_name', $userProfile->first_name ?? '') }}
                                {{ old('last_name', $userProfile->last_name ?? '') }}</div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="{{ $userProfile && $userProfile->profile_picture ? asset('img/user/profile/' . $userProfile->profile_picture) : asset('img/default.png') }}"
                                        class="rounded-circle img-thumbnail" alt="Ethan Leo"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                                <h5 class="text-center mb-1">{{ old('first_name', $userProfile->first_name ?? '') }}
                                    {{ old('last_name', $userProfile->last_name ?? '') }}</h5>
                                <p class="text-center text-secondary mb-4">{{ old('job', $userProfile->job ?? '') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card widget-card border-light shadow-sm">
                            <div class="card-header text-bg-success">Social Accounts</div>
                            <div class="card-body">
                                <a href="{{ old('instagram', $userProfile->instagram ?? '') }}"
                                    class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="{{ old('x_account', $userProfile->x_account ?? '') }}"
                                    class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="{{ old('facebook', $userProfile->facebook ?? '') }}"
                                    class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="{{ old('linkedin', $userProfile->linkedin ?? '') }}"
                                    class="d-inline-block bg-dark link-light lh-1 p-2 rounded">
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
                                        <div class="p-2">{{ old('first_name', $userProfile->first_name ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Nama Belakang</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('last_name', $userProfile->last_name ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Pendidikan</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('education', $userProfile->education ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Alamat</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('address', $userProfile->address ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Negara</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('country', $userProfile->country ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Pekerjaan</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('job', $userProfile->job ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Riwayat Penyakit</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">
                                            {{ old('disease_history', $userProfile->disease_history ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">No HP</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('phone', $userProfile->phone ?? '') }}</div>
                                    </div>
                                    <div class="col-5 col-md-3 bg-light border-bottom border-white border-3">
                                        <div class="p-2">Email</div>
                                    </div>
                                    <div
                                        class="col-7 col-md-9 bg-light border-start border-bottom border-white border-3">
                                        <div class="p-2">{{ old('email', $userProfile->email ?? '') }}</div>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex justify-content-end">
                                    <button class="btn btn-danger" style="font-weight: 600">Logout</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                <form action="{{ route('akun.update') }}" method="POST" enctype="multipart/form-data"
                                    class="row gy-3 gy-xxl-4">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row gy-2">
                                            <label class="col-12 form-label m-0">Foto Profil</label>
                                            <div class="col-12">
                                                <img src="{{ $userProfile && $userProfile->profile_picture ? asset('img/user/profile/' . $userProfile->profile_picture) : asset('img/default.png') }}"
                                                    class="img-fluid" alt="User Name">
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
                                        <input type="text" class="form-control" id="inputFirstName"
                                            value="{{ old('first_name', $userProfile->first_name ?? '') }}"
                                            name="first_name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputLastName" class="form-label">Nama Belakang</label>
                                        <input type="text" class="form-control" id="inputLastName"
                                            value="{{ old('last_name', $userProfile->last_name ?? '') }}"
                                            name="last_name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputEducation" class="form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="inputEducation"
                                            value="{{ old('education', $userProfile->education ?? '') }}"
                                            name="education">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputJob" class="form-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputJob"
                                            value="{{ old('job', $userProfile->job ?? '') }}" name="job">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="riwayatPenyakit" class="form-label">Riwayat Penyakit</label>
                                        <textarea class="form-control" id="riwayatPenyakit"
                                            name="disease_history">{{ old('disease_history', $userProfile->disease_history ?? '') }}</textarea>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputPhone" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="inputPhone" name="phone"
                                            value="{{ old('phone', $userProfile->phone ?? '') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                            value="{{ old('email', $userProfile->email ?? '') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputAddress" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="inputAddress" name="address"
                                            value="{{ old('address', $userProfile->address ?? '') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputCountry" class="form-label">Negara</label>
                                        <select class="form-select" id="inputCountry" name="country">
                                            <option value="Indonesia"
                                                {{ old('country', $userProfile->country ?? '') == 'Indonesia' ? 'selected' : '' }}>
                                                Indonesia</option>
                                            <option value="Malaysia"
                                                {{ old('country', $userProfile->country ?? '') == 'Malaysia' ? 'selected' : '' }}>
                                                Malaysia</option>
                                            <option value="Singapore"
                                                {{ old('country', $userProfile->country ?? '') == 'Singapore' ? 'selected' : '' }}>
                                                Singapore</option>
                                            <option value="Vietname"
                                                {{ old('country', $userProfile->country ?? '') == 'Vietname' ? 'selected' : '' }}>
                                                Vietname</option>
                                            <option value="Thailand"
                                                {{ old('country', $userProfile->country ?? '') == 'Thailand' ? 'selected' : '' }}>
                                                Thailand</option>
                                            <option value="Japan"
                                                {{ old('country', $userProfile->country ?? '') == 'Japan' ? 'selected' : '' }}>
                                                Japan</option>
                                            <option value="China"
                                                {{ old('country', $userProfile->country ?? '') == 'China' ? 'selected' : '' }}>
                                                China</option>
                                            <option value="Australia"
                                                {{ old('country', $userProfile->country ?? '') == 'Australia' ? 'selected' : '' }}>
                                                Australia</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputYouTube" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" id="inputYouTube" name="instagram"
                                            value="{{ old('instagram', $userProfile->instagram ?? '') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputX" class="form-label">X</label>
                                        <input type="text" class="form-control" id="inputX" name="x_account"
                                            value="{{ old('x_account', $userProfile->x_account ?? '') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputFacebook" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" id="inputFacebook" name="facebook"
                                            value="{{ old('facebook', $userProfile->facebook ?? '') }}">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="inputLinkedIn" class="form-label">LinkedIn</label>
                                        <input type="text" class="form-control" id="inputLinkedIn" name="linkedin"
                                            value="{{ old('linkedin', $userProfile->linkedin ?? '') }}">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Submit Perubahan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="password-tab-pane" role="tabpanel"
                                aria-labelledby="password-tab" tabindex="0">
                                <form action="{{ route('profile.change-password') }}" method="POST">
                                    @csrf
                                    <div class="row gy-3 gy-xxl-4">
                                        <div class="col-12">
                                            <label for="currentPassword" class="form-label">Password Saat Ini</label>
                                            <input type="password" class="form-control" id="currentPassword" name="current_password">
                                        </div>
                                        <div class="col-12">
                                            <label for="newPassword" class="form-label">Password Baru</label>
                                            <input type="password" class="form-control" id="newPassword" name="new_password" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="confirmPassword" name="new_password_confirmation" required>
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
