@extends('animations.layout')
@section('title', $country->name)

@section('content')
<div class="mb-4">
    <a href="{{ route('animations.index') }}" class="btn btn-ghost btn-sm"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
</div>

<div class="mb-4">
    <div class="d-flex align-items-center gap-3 mb-2">
        <span style="font-size:3rem; line-height:1">{{ $country->flag_emoji }}</span>
        <div>
            <h2 class="section-title mb-0">{{ $country->name }}</h2>
            <p class="section-sub mb-0">{{ $country->animations->count() }} film ditemukan</p>
        </div>
    </div>
</div>

{{-- Negara lain --}}
<div class="d-flex flex-wrap gap-2 mb-4">
    @foreach($countries as $c)
        <a href="{{ route('animations.byCountry', $c->id) }}"
           class="filter-btn {{ $c->id == $country->id ? 'active':'' }}">
            {{ $c->flag_emoji }} {{ $c->name }}
        </a>
    @endforeach
</div>

<div class="row g-3">
    @forelse($country->animations as $anim)
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="movie-card">
            <img src="{{ $anim->poster_url ?: 'https://placehold.co/300x400/111120/6b6b88?text=No+Poster' }}"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'" alt="{{ $anim->title }}">
            <div class="card-body">
                @if($anim->is_recommended)<span class="badge-rec mb-2 d-inline-block">⭐ Picks</span>@endif
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
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5" style="color:var(--muted)">Belum ada film dari {{ $country->name }}</div>
    @endforelse
</div>
@endsection
