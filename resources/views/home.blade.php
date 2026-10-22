@extends('layouts.app')

@section('content')

<div class="hero-banner">
    <h1 class="display-4 fw-bold mb-3">Galeri Lukisan Digital</h1>
    <p class="lead mb-0">Temukan ribuan karya seni digital menakjubkan dari artis berbakat</p>
</div>

<div class="row mb-5">
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Koleksi Luas</h5>
                <p class="card-text text-muted">Ribuan karya seni digital dari berbagai genre dan gaya artistik.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Artis Berbakat</h5>
                <p class="card-text text-muted">Karya dari seniman digital profesional maupun pemula berbakat.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Resolusi Tinggi</h5>
                <p class="card-text text-muted">Gambar berkualitas 2K, 4K, hingga 8K untuk kebutuhan Anda.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center py-5">
                <h3 class="fw-bold mb-3">Siap Menjelajahi Dunia Seni Digital?</h3>
                <p class="text-muted mb-4">Jelajahi ribuan karya seni, temukan artis favorit Anda, dan nikmati keindahan seni digital berkualitas tinggi.</p>
                <a href="{{ route('arts.index') }}" class="btn btn-primary btn-lg px-5">Lihat Koleksi Lengkap</a>
                <a href="{{ route('about') }}" class="btn btn-outline-secondary btn-lg px-4 ms-2">Tentang Kami</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 text-center mb-4">
        <div class="p-3">
            <div class="display-4 fw-bold text-primary">500+</div>
            <p class="text-muted mb-0">Karya Seni</p>
        </div>
    </div>
    <div class="col-md-4 text-center mb-4">
        <div class="p-3">
            <div class="display-4 fw-bold text-success">50+</div>
            <p class="text-muted mb-0">Artis Aktif</p>
        </div>
    </div>
    <div class="col-md-4 text-center mb-4">
        <div class="p-3">
            <div class="display-4 fw-bold text-warning">10K+</div>
            <p class="text-muted mb-0">Pengunjung Bulanan</p>
        </div>
    </div>
</div>
@endsection