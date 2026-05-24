@extends('animations.layout')
@section('title', 'Rekomendasi')

@section('content')
<div class="mb-4">
    <h2 class="section-title">⭐ Film Rekomendasi</h2>
    <p class="section-sub">{{ $animations->count() }} film pilihan terbaik dari seluruh dunia</p>
</div>

<div class="row g-3">
    @foreach($animations as $anim)
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="movie-card">
            <img src="{{ $anim->poster_url ?: 'https://placehold.co/300x400/111120/6b6b88?text=No+Poster' }}"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'" alt="{{ $anim->title }}">
            <div class="card-body">
                <div class="d-flex gap-1 mb-2 flex-wrap">
                    <span class="badge-country">{{ $anim->country->flag_emoji }} {{ $anim->country->name }}</span>
                    <span class="badge-rec">⭐ Picks</span>
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
                <a href="{{ route('animations.show', $anim->id) }}" class="btn btn-accent btn-sm w-100">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
