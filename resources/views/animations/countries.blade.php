@extends('animations.layout')
@section('title', 'Kelola Negara')

@section('content')
<div class="mb-4">
    <h2 class="section-title">🌍 Kelola Negara</h2>
    <p class="section-sub">Manajemen data negara asal film animasi</p>
</div>

<div class="row g-4">
    {{-- Form Tambah Negara --}}
    <div class="col-lg-4">
        <div style="background:var(--card); border:1px solid var(--border); border-radius:var(--radius); padding:24px; position:sticky; top:80px;">
            <h5 style="font-family:'Syne',sans-serif; font-weight:700; margin-bottom:20px;">➕ Tambah Negara</h5>
            <form action="{{ route('countries.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Negara</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" placeholder="Contoh: Indonesia">
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Flag Emoji</label>
                    <input type="text" name="flag_emoji" class="form-control @error('flag_emoji') is-invalid @enderror"
                           value="{{ old('flag_emoji') }}" placeholder="Contoh: 🇮🇩" maxlength="10">
                    @error('flag_emoji')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small style="color:var(--muted); font-size:0.78rem;">Copy emoji bendera dari keyboard atau internet</small>
                </div>
                <button type="submit" class="btn btn-accent w-100"><i class="bi bi-plus-circle-fill me-2"></i>Tambah Negara</button>
            </form>
        </div>
    </div>

    {{-- Tabel Negara --}}
    <div class="col-lg-8">
        <table class="table table-dark-custom w-100">
            <thead>
                <tr>
                    <th>Flag</th>
                    <th>Nama Negara</th>
                    <th>Jumlah Film</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $c)
                <tr>
                    <td style="font-size:1.5rem">{{ $c->flag_emoji }}</td>
                    <td>
                        <a href="{{ route('animations.byCountry', $c->id) }}" style="color:var(--text); text-decoration:none; font-weight:600;">
                            {{ $c->name }}
                        </a>
                    </td>
                    <td>
                        <span class="badge-genre" style="font-size:0.8rem; padding:4px 10px;">{{ $c->animations_count }} film</span>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('animations.byCountry', $c->id) }}" class="btn btn-ghost btn-sm"><i class="bi bi-eye"></i></a>
                            @if($c->animations_count == 0)
                            <form action="{{ route('countries.destroy', $c->id) }}" method="POST"
                                  onsubmit="return confirm('Hapus {{ $c->name }}?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger-soft btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
                            @else
                            <button class="btn btn-ghost btn-sm" disabled title="Tidak bisa hapus, masih ada {{ $c->animations_count }} film">
                                <i class="bi bi-trash" style="opacity:0.3"></i>
                            </button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <small style="color:var(--muted)"><i class="bi bi-info-circle me-1"></i>Negara yang masih memiliki film tidak dapat dihapus.</small>
    </div>
</div>
@endsection
