@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Edit Artikel')

@section('konten')
<div class="container py-5">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body px-4 py-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                <h2 class="mb-3 mb-md-0 text-primary fw-bold">Daftar Artikel</h2>
                <form method="GET" action="{{ route('artikel.search') }}" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" name="q" placeholder="Cari artikel..."
                        aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if ($articles->count())
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-primary text-center">
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
                    <tbody class="text-center">
                        @foreach ($articles as $index => $article)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="text-start">{{ $article->title }}</td>
                            <td>
                                @if ($article->cover_image)
                                <img src="{{ asset('img/admin/article/' . $article->cover_image) }}" alt="Cover"
                                    width="70" class="rounded">
                                @else
                                <span class="text-muted fst-italic">Tidak ada</span>
                                @endif
                            </td>
                            <td>{{ $article->penulis ?? $article->adminProfile->first_name ?? 'N/A' }}</td>
                            <td>
                                <span
                                    class="badge bg-{{ $article->status === 'published' ? 'success' : ($article->status === 'draft' ? 'warning' : 'secondary') }}">
                                    {{ ucfirst($article->status) }}
                                </span>
                            </td>
                            <td>{{ $article->published_at ?? 'Belum' }}</td>
                            <td>
                                <a href="{{ route('artikel.edit', $article->id) }}"
                                    class="btn btn-sm btn-outline-warning">Edit</a>
                                <form action="{{ route('artikel.destroy', $article->id) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="alert alert-info mt-3">Belum ada artikel yang tersedia.</div>
            @endif
        </div>
    </div>
</div>
@endsection
