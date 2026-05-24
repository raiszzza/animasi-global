<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AnimasiGlobal') — AnimasiGlobal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --bg:       #09090f;
            --surface:  #111120;
            --card:     #13131f;
            --border:   #1e1e30;
            --accent:   #ff3e6c;
            --accent2:  #ff8c42;
            --gold:     #f5c242;
            --teal:     #00e5c0;
            --text:     #f0f0f8;
            --muted:    #6b6b88;
            --radius:   14px;
        }
        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }
        h1,h2,h3,h4,h5,h6 { font-family: 'Syne', sans-serif; }

        /* ── Navbar ── */
        .navbar {
            background: rgba(9,9,15,0.92);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            padding: 14px 0;
            position: sticky; top: 0; z-index: 999;
        }
        .navbar-brand {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.4rem;
            color: var(--text) !important;
            letter-spacing: -0.5px;
        }
        .navbar-brand span { color: var(--accent); }
        .nav-link {
            color: var(--muted) !important;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 6px 14px !important;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .nav-link:hover, .nav-link.active { color: var(--text) !important; background: var(--border); }
        .navbar-toggler { border-color: var(--border); }
        .navbar-toggler-icon { filter: invert(1); }

        /* ── Add Film Button in navbar ── */
        .btn-nav-add {
            background: var(--accent);
            color: #fff !important;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 7px 16px !important;
            transition: all 0.2s;
        }
        .btn-nav-add:hover { background: #e0274f; transform: translateY(-1px); }

        /* ── Cards ── */
        .movie-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            transition: transform 0.25s, border-color 0.25s, box-shadow 0.25s;
            height: 100%;
        }
        .movie-card:hover {
            transform: translateY(-6px);
            border-color: var(--accent);
            box-shadow: 0 16px 40px rgba(255,62,108,0.15);
        }
        .movie-card img {
            width: 100%; height: 280px; object-fit: cover;
            border-bottom: 1px solid var(--border);
        }
        .movie-card .card-body { padding: 14px; }
        .movie-card .card-title { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1rem; margin-bottom: 6px; }

        /* ── Badges ── */
        .badge-country { background: var(--accent); font-size: 0.72rem; font-weight: 600; border-radius: 6px; padding: 3px 8px; }
        .badge-rating  { background: var(--gold); color: #000; font-weight: 700; font-size: 0.75rem; border-radius: 6px; padding: 3px 8px; }
        .badge-rec     { background: var(--teal); color: #000; font-size: 0.72rem; font-weight: 700; border-radius: 6px; padding: 3px 8px; }
        .badge-genre   { background: var(--border); color: var(--muted); font-size: 0.72rem; border-radius: 6px; padding: 3px 8px; }
        .badge-year    { background: var(--surface); color: var(--muted); font-size: 0.72rem; border-radius: 6px; padding: 3px 8px; }

        /* ── Buttons ── */
        .btn-accent { background: var(--accent); color: #fff; border: none; border-radius: 10px; font-weight: 600; transition: all 0.2s; }
        .btn-accent:hover { background: #e0274f; color: #fff; transform: translateY(-1px); }
        .btn-teal   { background: var(--teal); color: #000; border: none; border-radius: 10px; font-weight: 600; transition: all 0.2s; }
        .btn-teal:hover { background: #00c9a9; color: #000; }
        .btn-ghost  { background: transparent; color: var(--muted); border: 1px solid var(--border); border-radius: 10px; font-weight: 500; transition: all 0.2s; }
        .btn-ghost:hover { background: var(--border); color: var(--text); border-color: var(--muted); }
        .btn-danger-soft { background: rgba(255,62,108,0.12); color: var(--accent); border: 1px solid rgba(255,62,108,0.25); border-radius: 10px; font-weight: 600; transition: all 0.2s; }
        .btn-danger-soft:hover { background: var(--accent); color: #fff; }

        /* ── Section Title ── */
        .section-title { font-family: 'Syne', sans-serif; font-weight: 800; font-size: 1.5rem; color: var(--text); margin-bottom: 4px; }
        .section-sub   { color: var(--muted); font-size: 0.9rem; }

        /* ── Forms ── */
        .form-control, .form-select {
            background: var(--surface) !important;
            border: 1px solid var(--border) !important;
            color: var(--text) !important;
            border-radius: 10px !important;
            padding: 10px 14px !important;
            font-size: 0.9rem;
            transition: border-color 0.2s;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--accent) !important;
            box-shadow: 0 0 0 3px rgba(255,62,108,0.15) !important;
        }
        .form-control::placeholder { color: var(--muted) !important; }
        .form-label { font-weight: 600; font-size: 0.85rem; color: var(--muted); margin-bottom: 6px; letter-spacing: 0.03em; text-transform: uppercase; }
        .form-check-input:checked { background-color: var(--accent); border-color: var(--accent); }
        textarea.form-control { min-height: 120px; resize: vertical; }
        .invalid-feedback { font-size: 0.8rem; }

        /* ── Alert ── */
        .alert-success-custom {
            background: rgba(0,229,192,0.08);
            border: 1px solid rgba(0,229,192,0.25);
            color: var(--teal);
            border-radius: var(--radius);
            font-size: 0.9rem;
        }
        .alert-danger-custom {
            background: rgba(255,62,108,0.08);
            border: 1px solid rgba(255,62,108,0.25);
            color: var(--accent);
            border-radius: var(--radius);
            font-size: 0.9rem;
        }

        /* ── Filter buttons ── */
        .filter-btn {
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--muted);
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 500;
            padding: 5px 14px;
            transition: all 0.2s;
            text-decoration: none;
        }
        .filter-btn:hover, .filter-btn.active {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
        }

        /* ── Hero strip ── */
        .page-hero {
            background: linear-gradient(135deg, var(--surface) 0%, #1a0d1a 100%);
            border-bottom: 1px solid var(--border);
            padding: 36px 0 28px;
            margin-bottom: 32px;
        }

        /* ── Table ── */
        .table-dark-custom { border-collapse: separate; border-spacing: 0 6px; }
        .table-dark-custom thead th { font-family: 'Syne', sans-serif; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--muted); border: none; padding-bottom: 8px; }
        .table-dark-custom tbody tr { background: var(--card); }
        .table-dark-custom tbody td { border: none; padding: 14px 16px; vertical-align: middle; font-size: 0.9rem; }
        .table-dark-custom tbody tr td:first-child { border-radius: 10px 0 0 10px; }
        .table-dark-custom tbody tr td:last-child  { border-radius: 0 10px 10px 0; }

        /* ── Stats strip ── */
        .stat-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 20px 24px; }
        .stat-number { font-family: 'Syne', sans-serif; font-size: 2rem; font-weight: 800; color: var(--accent); }
        .stat-label  { color: var(--muted); font-size: 0.82rem; margin-top: 2px; }

        /* ── Footer ── */
        footer { background: var(--surface); border-top: 1px solid var(--border); padding: 28px 0; margin-top: 60px; }
        footer small { color: var(--muted); font-size: 0.82rem; }

        /* ── Scrollbar ── */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: var(--bg); }
        ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--muted); }

        /* ── Rank badge (boxoffice) ── */
        .rank-num { font-family: 'Syne', sans-serif; font-size: 1.8rem; font-weight: 800; color: var(--border); line-height: 1; }
        .rank-num.top3 { color: var(--gold); }

        /* ── Synopsis clamp ── */
        .synopsis-clamp { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; font-size: 0.83rem; color: var(--muted); line-height: 1.5; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('animations.index') }}">🎬 Animasi<span>Global</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto ms-3 gap-1">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('animations.index') ? 'active':'' }}" href="{{ route('animations.index') }}"><i class="bi bi-house-fill me-1"></i>Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('animations.boxoffice') ? 'active':'' }}" href="{{ route('animations.boxoffice') }}"><i class="bi bi-trophy-fill me-1"></i>Box Office</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('animations.recommended') ? 'active':'' }}" href="{{ route('animations.recommended') }}"><i class="bi bi-star-fill me-1"></i>Rekomendasi</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('countries.index') ? 'active':'' }}" href="{{ route('countries.index') }}"><i class="bi bi-globe2 me-1"></i>Negara</a></li>
            </ul>
            <a href="{{ route('animations.create') }}" class="nav-link btn-nav-add"><i class="bi bi-plus-lg me-1"></i>Tambah Film</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success-custom d-flex align-items-center gap-2 mb-4" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger-custom mb-4">
            <i class="bi bi-exclamation-circle-fill me-2"></i>
            <ul class="mb-0 ps-3">
                @foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

<footer>
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
        <small>© 2025 <strong style="color:var(--text)">AnimasiGlobal</strong> — Raisa Salsa Nabila &middot; 2408107010007</small>
        <small class="d-flex gap-3">
            <a href="{{ route('animations.index') }}" class="text-decoration-none" style="color:var(--muted)">Beranda</a>
            <a href="{{ route('animations.create') }}" class="text-decoration-none" style="color:var(--muted)">Tambah Film</a>
            <a href="{{ route('countries.index') }}" class="text-decoration-none" style="color:var(--muted)">Negara</a>
        </small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
