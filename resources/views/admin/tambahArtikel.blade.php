@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Tambah Artikel')

@section('konten')
<style>
    .contact-form {
        background: #fff;
        margin-top: 5%;
        margin-bottom: 5%;
        padding: 2%;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #00000010;
    }

    .contact-image {
        text-align: center;
        margin-bottom: -40px;
    }

    .contact-image img {
        width: 80px;
        border-radius: 50%;
        background: #007bff;
        padding: 10px;
    }

    .btnContact {
        background-color: #dc3545;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
    }

    .btnContact:hover {
        background-color: #bb2d3b;
    }

</style>

<div class="container contact-form">
    <div class="contact-image">
        <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png" alt="book_logo" />
    </div>
    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <h3 class="text-center text-primary">Tambah Data Artikel</h3>

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

        {{-- Warning --}}
        @if (session('warning'))
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            <div class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                <div>
                    {{ session('warning') }}
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Judul" required
                        style="border-radius: 5px" />
                </div>
                <div class="mb-3">
                    <input type="text" name="penulis" class="form-control" placeholder="Penulis" required
                        style="border-radius: 5px" />
                </div>
                <div class="mb-3">
                    <select name="status" class="form-control" style="border-radius: 5px; height: 40px;">
                        <option value="" disabled selected>Pilih Status *</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                        <option value="archived">Archived</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="date" name="published_at" class="form-control" placeholder="Publish" required
                        style="border-radius: 5px" />
                </div>
                <div class="mb-3">
                    <input type="file" name="cover_image" class="form-control" placeholder="Cover Artikel"
                        style="border-radius: 5px" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <textarea name="content" class="form-control" placeholder="Isi Artikel" rows="20"
                        style="border-radius: 5px"></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button class="btn btn-success" type="submit">Tambah Artikel</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection