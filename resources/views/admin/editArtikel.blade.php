@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Edit Artikel')

@section('konten')
<div class="container mt-4">
    <h2>Daftar Artikel</h2>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($articles->count())
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Cover</th>
                <th>Penulis</th>
                <th>Status</th>
                <th>Dipublikasikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $index => $article)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $article->title }}</td>
                <td>
                    @if ($article->cover_image)
                    <img src="{{ asset('img/admin/article/' . $article->cover_image) }}" alt="Cover" width="80">
                    @else
                    <span class="text-muted">Tidak ada</span>
                    @endif
                </td>
                <td>{{ $article->penulis ?? $article->profileAdmin->first_name ?? 'N/A' }}</td>
                <td>
                    <span class="badge bg-{{ $article->status === 'published' ? 'success' : 'secondary' }}">
                        {{ ucfirst($article->status) }}
                    </span>
                </td>
                <td>{{ $article->published_at ?? 'Belum' }}</td>
                <td>
                    <a href="{{ route('artikel.edit', $article->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('artikel.destroy', $article->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info mt-3">Belum ada artikel yang tersedia.</div>
    @endif
</div>
@endsection
