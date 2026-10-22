@extends('layouts.app')

@section('content')
<div class="row mb-5">
    <div class="col-12 text-center mb-4">
        <h2 class="fw-bold text-dark">Fitur Utama</h2>
        <p class="text-muted">Apa yang membuat kami berbeda</p>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Galeri Interaktif</h5>
                <p class="card-text text-muted">Jelajahi koleksi dengan filter kategori, pencarian, dan tampilan grid yang responsif.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Desain Responsif</h5>
                <p class="card-text text-muted">Tampilan optimal di desktop, tablet, dan mobile tanpa mengorbankan kualitas gambar.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Detail Lengkap</h5>
                <p class="card-text text-muted">Informasi lengkap: judul, artis, resolusi, software, harga, dan deskripsi karya.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Performa Cepat</h5>
                <p class="card-text text-muted">Optimasi gambar dan caching untuk pengalaman browsing yang lancar.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Berbagai Genre</h5>
                <p class="card-text text-muted">Dari abstrak, lanskap, karakter, hingga konsep seni - semua ada di sini.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0 text-center p-4">
            <div class="card-body">
                <div class="display-1 mb-3"></div>
                <h5 class="card-title fw-bold">Hak Cipta Dilindungi</h5>
                <p class="card-text text-muted">Karya artis dilindungi dengan watermark dan lisensi yang jelas.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold text-warning mb-3">Identitas Pembuat</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><strong>NIM:</strong> 251011700223</li>
                    <li class="mb-2"><strong>Nama:</strong> Muhammad Khoirul Suryanto</li>
                    <li class="mb-2"><strong>Prodi:</strong> Sistem Informasi</li>
                    <li class="mb-2"><strong>Email:</strong> mkhoirulsuryanto@gmail.com</li>
                    <li class="mb-0"><strong>Universitas:</strong> Universitas Pamulang</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold text-info mb-3">Mata Kuliah</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><strong>Mata Kuliah:</strong> Rekayasa Web</li>
                    <li class="mb-2"><strong>Semester:</strong> Ganjil 2025/2026</li>
                    <li class="mb-2"><strong>Dosen:</strong> Afif Efendi </li>
                    <li class="mb-2"><strong>Tipe Tugas:</strong> UTS (Ujian Tengah Semester)</li>
                    <li class="mb-0"><strong>Tahun Akademik:</strong> 2025/2026</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 text-center">
        <div class="card shadow-sm border-0">
            <div class="card-body py-5">
                <h3 class="fw-bold mb-3">Tertarik dengan Koleksi Kami?</h3>
                <p class="text-muted mb-4">Jelajahi ribuan karya seni digital menakjubkan dan temukan inspirasi baru.</p>
                <a href="{{ route('arts.index') }}" class="btn btn-primary btn-lg px-5 me-2">Lihat Koleksi</a>
                <a href="{{ route('home') }}" class="btn btn-outline-secondary btn-lg px-4">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection