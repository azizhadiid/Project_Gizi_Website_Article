@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Akun')

@section('konten')
<div class="container rounded bg-white mt-5 mb-5">
    {{-- Alert Section --}}
    <div class="row">
        <div class="col-12">
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

    <div class="row">
        <div class="col-md-3 border-end">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5 mb-3" width="150px"
                    src="{{ asset('img/admin/profile/' . (Auth::user()->adminProfile->profile_picture ?? 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg')) }}">
                <span class="font-weight-bold">{{ Auth::user()->adminProfile->first_name ?? '' }}</span>
                <span class="text-black-50">{{ Auth::user()->adminProfile->email ?? '' }}</span>
                <span></span>
            </div>
        </div>
        <div class="col-md-9">
            <form class="p-3 py-5" action="{{ route('admin.profile.update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Pengaturan Profil Admin</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels mb-1">Nama Depan</label><input type="text"
                            class="form-control" placeholder="Nama depan"
                            value="{{ Auth::user()->adminProfile->first_name ?? '' }}" name="first_name"></div>
                    <div class="col-md-6"><label class="labels mb-1">Nama Belakang</label><input type="text"
                            class="form-control" placeholder="Nama belakang"
                            value="{{ Auth::user()->adminProfile->last_name ?? '' }}" name="last_name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels mb-1">Nomor HP</label><input type="text"
                            class="form-control" placeholder="08xxxxxxxxxx"
                            value="{{ Auth::user()->adminProfile->phone ?? '' }}" name="phone"></div>
                    <div class="col-md-12"><label class="labels mb-1">Alamat</label><input type="text"
                            class="form-control" placeholder="Alamat lengkap"
                            value="{{ Auth::user()->adminProfile->address ?? '' }}" name="address"></div>
                    <div class="col-md-12"><label class="labels mb-1">Email</label><input type="text"
                            class="form-control" placeholder="Email aktif"
                            value="{{ Auth::user()->adminProfile->email ?? '' }}" name="email"></div>
                    <div class="col-md-12"><label class="labels mb-1">Jabatan</label><input type="text"
                            class="form-control" placeholder="Contoh: Administrator Sistem"
                            value="{{ Auth::user()->adminProfile->position ?? '' }}" name="position"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels mb-1">Unggah Foto Profil</label>
                        <input type="file" class="form-control" name="profile_picture">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
