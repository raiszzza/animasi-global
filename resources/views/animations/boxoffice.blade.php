@extends('animations.layout')
@section('title', 'Box Office')

@section('content')
<div class="mb-4">
    <h2 class="section-title">🏆 Top Box Office</h2>
    <p class="section-sub">10 Film Animasi Dengan Pendapatan Tertinggi</p>
</div>

<div class="row g-3">
    @foreach($animations as $i => $anim)
    <div class="col-12">
        <div style="background:var(--card); border:1px solid var(--border); border-radius:var(--radius); padding:16px 20px; display:flex; align-items:center; gap:20px; transition: border-color 0.2s;"
             onmouseover="this.style.borderColor='var(--accent)'" onmouseout="this.style.borderColor='var(--border)'">
            <div class="rank-num {{ $i < 3 ? 'top3':'' }}" style="min-width:48px; text-align:center;">
                {{ $i < 3 ? ['🥇','🥈','🥉'][$i] : ($i+1) }}
            </div>
            <img src="{{ $anim->poster_url ?: 'https://placehold.co/56x80/111120/6b6b88?text=?' }}"
                 onerror="this.src='https://placehold.co/56x80/111120/6b6b88?text=?'"
                 style="width:56px; height:80px; object-fit:cover; border-radius:8px; border:1px solid var(--border); flex-shrink:0">
            <div style="flex:1; min-width:0">
                <div class="d-flex flex-wrap gap-2 mb-1">
                    <span class="badge-country">{{ $anim->country->flag_emoji }} {{ $anim->country->name }}</span>
                    @if($anim->is_recommended)<span class="badge-rec">⭐ Picks</span>@endif
                </div>
                <h6 style="font-family:'Syne',sans-serif; font-weight:700; margin-bottom:4px; font-size:1rem;">{{ $anim->title }}</h6>
                <div class="d-flex gap-2">
                    <span class="badge-year">{{ $anim->year }}</span>
                    <span class="badge-genre">{{ $anim->genre }}</span>
                    <span class="badge-rating">⭐ {{ $anim->rating }}</span>
                </div>
            </div>
            <div class="text-end" style="flex-shrink:0">
                <div style="color:var(--teal); font-family:'Syne',sans-serif; font-weight:800; font-size:1.2rem;">
                    ${{ number_format($anim->box_office, 0, ',', '.') }}M
                </div>
                <small style="color:var(--muted); font-size:0.75rem;">Pendapatan</small>
                <div class="mt-2">
                    <a href="{{ route('animations.show', $anim->id) }}" class="btn btn-accent btn-sm">Detail</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
