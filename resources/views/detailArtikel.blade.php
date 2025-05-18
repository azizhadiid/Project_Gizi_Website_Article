@extends('templates.mainLayoutUser')

@section('title', $artikel->title)

@section('konten')
<div class="container py-5">
    <div class="mb-4">
        <h1 class="fw-bold">{{ $artikel->title }}</h1>
        <small class="text-muted">Ditulis oleh {{ $artikel->penulis }} | {{ \Carbon\Carbon::parse($artikel->published_at)->translatedFormat('d M Y') }}</small>
    </div>

    @if ($artikel->cover_image)
        <img src="{{ asset('img/admin/article/' . $artikel->cover_image) }}" class="img-fluid rounded mb-4" alt="{{ $artikel->title }}" style="height: 400px; width: 100%; object-fit: cover;">
    @endif

    <div class="content">
        {!! nl2br(e($artikel->content)) !!}
    </div>
</div>
@endsection
