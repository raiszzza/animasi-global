@extends('animations.layout')
@section('title', 'Beranda')

@section('content')
{{-- Hero --}}
<div class="mb-4">
    <h1 class="section-title">🌍 Animasi Global</h1>
    <p class="section-sub">Jelajahi film animasi terbaik dari berbagai penjuru dunia</p>
</div>

{{-- Stats --}}
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number">{{ $animations->count() }}</div>
            <div class="stat-label"><i class="bi bi-film me-1"></i>Total Film</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number">{{ $countries->count() }}</div>
            <div class="stat-label"><i class="bi bi-globe2 me-1"></i>Negara</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number" style="color:var(--gold)">{{ $animations->where('is_recommended', true)->count() }}</div>
            <div class="stat-label"><i class="bi bi-star-fill me-1"></i>Direkomendasikan</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number" style="color:var(--teal)">{{ number_format($animations->avg('rating'), 1) }}</div>
            <div class="stat-label"><i class="bi bi-bar-chart-fill me-1"></i>Rata-rata Rating</div>
        </div>
    </div>
</div>

{{-- Filter by country --}}
<div class="mb-4">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <span class="fw-600" style="font-weight:600; font-size:0.9rem; color:var(--muted)">FILTER NEGARA</span>
        <a href="{{ route('animations.create') }}" class="btn btn-accent btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Film</a>
    </div>
    <div class="d-flex flex-wrap gap-2">
        <a href="{{ route('animations.index') }}" class="filter-btn active">Semua</a>
        @foreach($countries as $c)
            <a href="{{ route('animations.byCountry', $c->id) }}" class="filter-btn">{{ $c->flag_emoji }} {{ $c->name }}</a>
        @endforeach
    </div>
</div>

{{-- Grid --}}
<div class="row g-3">
    @foreach($animations as $anim)
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="movie-card">
            <img src="{{ $anim->poster_url ?: 'https://placehold.co/300x400/111120/ffffff?text='.urlencode($anim->title) }}"
                 alt="{{ $anim->title }}"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'">
            <div class="card-body">
                <div class="d-flex gap-1 mb-2 flex-wrap">
                    <span class="badge-country">{{ $anim->country->flag_emoji }} {{ $anim->country->name }}</span>
                    @if($anim->is_recommended)<span class="badge-rec">⭐ Picks</span>@endif
                </div>
                <h6 class="card-title">{{ $anim->title }}</h6>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex gap-1">
                        <span class="badge-year">{{ $anim->year }}</span>
                        <span class="badge-genre">{{ $anim->genre }}</span>
                    </div>
                    <span class="badge-rating">⭐ {{ $anim->rating }}</span>
                </div>
                <p class="synopsis-clamp mb-3">{{ $anim->synopsis }}</p>
                <div class="d-flex gap-2">
                    <a href="{{ route('animations.show', $anim->id) }}" class="btn btn-accent btn-sm flex-fill">Detail</a>
                    <a href="{{ route('animations.edit', $anim->id) }}" class="btn btn-ghost btn-sm"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('animations.destroy', $anim->id) }}" method="POST" onsubmit="return confirm('Hapus film ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger-soft btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
