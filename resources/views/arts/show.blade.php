@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('arts.index') }}" class="btn btn-outline-secondary">&larr; Kembali ke Daftar Koleksi</a>
</div>

<div class="card shadow border-0 overflow-hidden">
    <div class="row g-0">
        <div class="col-md-6 bg-dark d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/images/' . $art->image) }}" class="img-fluid p-3 rounded" style="max-height: 450px; object-fit: contain;" alt="{{ $art->title }}">
        </div>
        <div class="col-md-6">
            <div class="card-body p-4">
                <span class="badge bg-info text-dark mb-2">Resolusi: {{ $art->resolution }}</span>
                <h2 class="card-title fw-bold text-dark">{{ $art->title }}</h2>
                <p class="text-muted fs-5">Artis: <strong>{{ $art->artist }}</strong></p>
                <hr>

                <table class="table table-borderless">
                    <tr>
                        <td class="fw-bold text-secondary" style="width: 140px;">Software Used</td>
                        <td>: <span class="badge bg-dark">{{ $art->software_used }}</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-secondary">Resolusi Gambar</td>
                        <td>: {{ $art->resolution }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-secondary">Harga Digital Art</td>
                        <td>: <span class="fs-4 fw-bold text-success">Rp {{ number_format($art->price, 0, ',', '.') }}</span></td>
                    </tr>
                </table>

                <div class="mt-4">
                    <button class="btn btn-success btn-lg w-100">Beli Lisensi Digital</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection