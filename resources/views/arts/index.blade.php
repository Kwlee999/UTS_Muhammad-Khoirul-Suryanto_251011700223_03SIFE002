@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-dark">Koleksi Karya Seni Digital</h3>
    <span class="badge bg-primary fs-6">{{ $arts->total() }} Karya Tersedia</span>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($arts as $art)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('assets/images/' . $art->image) }}" class="card-img-top" alt="{{ $art->title }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold text-truncate">{{ $art->title }}</h5>
                    <p class="text-muted small mb-2">By <strong>{{ $art->artist }}</strong></p>
                    <p class="badge bg-secondary w-fit mb-2" style="width: max-content;">{{ $art->software_used }}</p>
                    <h6 class="text-success fw-bold mt-auto mb-3">Rp {{ number_format($art->price, 0, ',', '.') }}</h6>
                    <a href="{{ route('arts.show', $art->id) }}" class="btn btn-primary w-100">Detail Karya</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mt-4 d-flex justify-content-center">
    {{ $arts->links('pagination::bootstrap-5') }}
</div>
@endsection