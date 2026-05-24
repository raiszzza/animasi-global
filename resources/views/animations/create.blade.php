@extends('animations.layout')
@section('title', 'Tambah Film')

@section('content')
<div class="mb-4">
    <a href="{{ route('animations.index') }}" class="btn btn-ghost btn-sm"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div style="background:var(--card); border:1px solid var(--border); border-radius:18px; padding:32px 36px;">
            <div class="mb-4">
                <h2 class="section-title mb-1">🎬 Tambah Film Baru</h2>
                <p class="section-sub">Isi detail film animasi yang ingin ditambahkan</p>
            </div>

            <form action="{{ route('animations.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label">Judul Film</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title') }}" placeholder="Contoh: Spirited Away">
                        @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Negara</label>
                        <select name="country_id" class="form-select @error('country_id') is-invalid @enderror">
                            <option value="">— Pilih Negara —</option>
                            @foreach($countries as $c)
                                <option value="{{ $c->id }}" {{ old('country_id') == $c->id ? 'selected':'' }}>
                                    {{ $c->flag_emoji }} {{ $c->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('country_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Genre</label>
                        <input type="text" name="genre" class="form-control @error('genre') is-invalid @enderror"
                               value="{{ old('genre') }}" placeholder="Contoh: Fantasi, Petualangan">
                        @error('genre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tahun Rilis</label>
                        <input type="number" name="year" class="form-control @error('year') is-invalid @enderror"
                               value="{{ old('year', date('Y')) }}" min="1900" max="2099">
                        @error('year')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Rating (0–10)</label>
                        <input type="number" name="rating" step="0.1" min="0" max="10"
                               class="form-control @error('rating') is-invalid @enderror"
                               value="{{ old('rating') }}" placeholder="7.5">
                        @error('rating')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Box Office (Juta USD)</label>
                        <input type="number" name="box_office" step="0.01" min="0"
                               class="form-control @error('box_office') is-invalid @enderror"
                               value="{{ old('box_office') }}" placeholder="Opsional">
                        @error('box_office')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Sinopsis</label>
                        <textarea name="synopsis" class="form-control @error('synopsis') is-invalid @enderror"
                                  placeholder="Ceritakan sinopsis singkat film ini...">{{ old('synopsis') }}</textarea>
                        @error('synopsis')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">URL Poster</label>
                        <input type="url" name="poster_url" class="form-control @error('poster_url') is-invalid @enderror"
                               value="{{ old('poster_url') }}" placeholder="https://image.tmdb.org/...">
                        @error('poster_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="col-12">
                        <div class="form-check d-flex align-items-center gap-2" style="padding:12px 16px; background:var(--surface); border-radius:10px; border:1px solid var(--border)">
                            <input class="form-check-input" type="checkbox" name="is_recommended" id="rec" value="1"
                                   {{ old('is_recommended') ? 'checked':'' }} style="width:18px; height:18px;">
                            <label class="form-check-label" for="rec" style="font-size:0.9rem; text-transform:none; color:var(--text); letter-spacing:0; font-weight:500; cursor:pointer;">
                                ⭐ Tandai sebagai film <strong>Rekomendasi</strong>
                            </label>
                        </div>
                    </div>

                    <div class="col-12 d-flex gap-3 pt-2">
                        <button type="submit" class="btn btn-accent flex-fill py-2">
                            <i class="bi bi-plus-circle-fill me-2"></i>Simpan Film
                        </button>
                        <a href="{{ route('animations.index') }}" class="btn btn-ghost px-4 py-2">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
