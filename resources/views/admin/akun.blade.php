@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Akun')

@section('konten')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-end">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Admin Giziku</span>
                <span class="text-black-50">admin@giziku.com</span>
                <span></span>
            </div>
        </div>
        <div class="col-md-5 border-end">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Pengaturan Profil Admin</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels mb-1">Nama Depan</label><input type="text"
                            class="form-control" placeholder="Nama depan" value=""></div>
                    <div class="col-md-6"><label class="labels mb-1">Nama Belakang</label><input type="text"
                            class="form-control" value="" placeholder="Nama belakang"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels mb-1">Nomor HP</label><input type="text" class="form-control"
                            placeholder="08xxxxxxxxxx" value=""></div>
                    <div class="col-md-12"><label class="labels mb-1">Alamat</label><input type="text" class="form-control"
                            placeholder="Alamat lengkap" value=""></div>
                    <div class="col-md-12"><label class="labels mb-1">Email</label><input type="text" class="form-control"
                            placeholder="Email aktif" value=""></div>
                    <div class="col-md-12"><label class="labels mb-1">Jabatan</label><input type="text" class="form-control"
                            placeholder="Contoh: Administrator Sistem" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels mb-1">Unggah Foto Profil</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Simpan Perubahan</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <span>Info Tambahan</span>
                    <span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Tambah</span>
                </div><br>
                <div class="col-md-12"><label class="labels mb-1">Pengalaman Admin</label><input type="text"
                        class="form-control" placeholder="Contoh: 2 tahun mengelola konten" value=""></div><br>
                <div class="col-md-12"><label class="labels mb-1">Catatan Tambahan</label><input type="text"
                        class="form-control" placeholder="Catatan penting lainnya" value=""></div>
            </div>
        </div>
    </div>
</div>
@endsection
