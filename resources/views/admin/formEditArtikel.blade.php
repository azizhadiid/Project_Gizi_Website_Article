@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Edit Artikel')

@section('konten')
<div class="container mt-4">
    <h2>Edit Artikel</h2>

    <form action="{{ route('artikel.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}">
        </div>

        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ $article->penulis }}">
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" class="form-control">{{ $article->content }}</textarea>
        </div>

        <div class="mb-3">
            <label>Cover Lama</label><br>
            @if ($article->cover_image)
                <img src="{{ asset('img/admin/article/' . $article->cover_image) }}" width="100">
            @else
                Tidak ada cover
            @endif
        </div>

        <div class="mb-3">
            <label>Ganti Cover</label>
            <input type="file" name="cover_image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ $article->status == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Published At</label>
            <input type="text" name="published_at" class="form-control" value="{{ $article->published_at }}">
        </div>

        <button type="submit" class="btn btn-success">Update Artikel</button>
    </form>
</div>
@endsection
