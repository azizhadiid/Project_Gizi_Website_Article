@extends('admin.templates.mainLayoutAdmin')

@section('title', 'Konsultasi')

@section('konten')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card shadow-sm rounded-4">
            <div class="card-body">
                {{-- Alert untuk pesan sukses --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                {{-- Alert untuk pesan error --}}
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title text-primary mb-0">Daftar Konsultasi</h4>
                </div>

                {{-- Form Pencarian --}}
                <div class="mb-3">
                    <form action="{{ route('adminKonsul.index') }}" method="GET" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari berdasarkan nama atau topik..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>

                <div class="table-responsive border rounded p-2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Topik</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($konsultasis as $konsul)
                            <tr>
                                <td>
                                    @php
                                    $foto = $konsul->user->userProfile->profile_picture ?? 'profile.jpg';
                                    @endphp
                                    <img class="img-sm rounded-circle me-2"
                                        src="{{ asset('img/user/profile/' . $foto) }}" alt="profile image">
                                    {{ $konsul->user->name ?? '-' }}
                                </td>
                                <td>{{ $konsul->jenis_konsultasi }}</td>
                                <td>{{ \Carbon\Carbon::parse($konsul->tanggal_konsultasi)->translatedFormat('d F Y') }}
                                </td>
                                <td>
                                    @if($konsul->status == 'menunggu')
                                    <span class="badge bg-warning text-dark p-2 rounded-3">Menunggu</span>
                                    @elseif($konsul->status == 'disetujui')
                                    <span class="badge bg-success p-2 rounded-3">Disetujui</span>
                                    @elseif($konsul->status == 'batal')
                                    <span class="badge bg-danger p-2 rounded-3">Batal</span>
                                    @elseif($konsul->status == 'selesai')
                                    <span class="badge bg-info p-2 rounded-3">Selesai</span>
                                    @else
                                    <span class="badge bg-secondary p-2 rounded-3">Tidak Diketahui</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        {{-- Tombol Selesai --}}
                                        @if($konsul->status != 'selesai')
                                        <form action="{{ route('adminKonsul.updateStatus', $konsul->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="selesai">
                                            <button type="submit" class="btn btn-success btn-sm" title="Tandai Selesai">Selesai</button>
                                        </form>
                                        @endif

                                        {{-- Tombol Dibatalkan --}}
                                        @if($konsul->status != 'batal')
                                        <form action="{{ route('adminKonsul.updateStatus', $konsul->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="batal">
                                            <button type="submit" class="btn btn-danger btn-sm" title="Batalkan Konsultasi">Batalkan</button>
                                        </form>
                                        @endif

                                        {{-- Tombol Menunggu --}}
                                        @if($konsul->status != 'menunggu')
                                        <form action="{{ route('adminKonsul.updateStatus', $konsul->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="menunggu">
                                            <button type="submit" class="btn btn-warning btn-sm text-dark" title="Kembalikan ke Menunggu">Menunggu</button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data konsultasi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex mt-4 flex-wrap align-items-center">
                    <nav class="ms-auto">
                        {{ $konsultasis->links('pagination::bootstrap-5') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-top: 300px"></div>
@endsection