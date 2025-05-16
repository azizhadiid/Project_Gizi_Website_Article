@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Tambah Artikel')

@section('konten')
<div class="container py-5">
    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body px-4 py-5">
            <div class="text-center mb-4">
                <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="book_logo" width="80" class="bg-primary p-2 rounded-circle" />
                <h3 class="mt-3 text-primary fw-bold">Tambah Data Artikel</h3>
            </div>

            {{-- Error Alert --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mb-0 mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Success Alert --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Warning Alert --}}
            @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Judul" required>
                            <label for="title">Judul Artikel</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Penulis" required>
                            <label for="penulis">Penulis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="status" class="form-select" id="status" required>
                                <option value="" disabled selected>Pilih Status</option>
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                                <option value="archived">Archived</option>
                            </select>
                            <label for="status">Status</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" name="published_at" class="form-control" id="published_at" placeholder="Publish Date" required>
                            <label for="published_at">Tanggal Publish</label>
                        </div>
                        <div class="mb-3">
                            <label for="cover_image" class="form-label">Cover Artikel</label>
                            <input type="file" name="cover_image" class="form-control" id="cover_image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <textarea name="content" class="form-control" placeholder="Isi Artikel" id="content" style="height: 360px;"></textarea>
                            <label for="content">Isi Artikel</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success px-4 py-2 rounded-3" type="submit">
                                <i class="bi bi-plus-circle me-2"></i> Tambah Artikel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
