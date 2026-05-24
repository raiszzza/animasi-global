<?php

namespace App\Http\Controllers;

use App\Models\Animation;
use App\Models\Country;
use Illuminate\Http\Request;

class AnimationController extends Controller
{
    // ── READ ──────────────────────────────────────────────────────
    public function index()
    {
        $countries  = Country::with('animations')->get();
        $animations = Animation::with('country')->latest()->get();
        return view('animations.index', compact('countries', 'animations'));
    }

    public function show($id)
    {
        $animation = Animation::with('country')->find($id);
        if (!$animation) abort(404);
        $related = Animation::with('country')
            ->where('country_id', $animation->country_id)
            ->where('id', '!=', $animation->id)
            ->take(4)->get();
        return view('animations.show', compact('animation', 'related'));
    }

    public function byCountry($id)
    {
        $country   = Country::with('animations')->find($id);
        if (!$country) abort(404);
        $countries = Country::all();
        return view('animations.by_country', compact('country', 'countries'));
    }

    public function boxOffice()
    {
        $animations = Animation::with('country')
            ->whereNotNull('box_office')
            ->orderBy('box_office', 'desc')
            ->take(10)->get();
        return view('animations.boxoffice', compact('animations'));
    }

    public function recommended()
    {
        $animations = Animation::with('country')
            ->where('is_recommended', true)
            ->orderBy('rating', 'desc')
            ->get();
        return view('animations.recommended', compact('animations'));
    }

    // ── CREATE ────────────────────────────────────────────────────
    public function create()
    {
        $countries = Country::all();
        return view('animations.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'country_id'     => 'required|exists:countries,id',
            'genre'          => 'required|string|max:100',
            'year'           => 'required|integer|min:1900|max:2099',
            'rating'         => 'required|numeric|min:0|max:10',
            'box_office'     => 'nullable|numeric|min:0',
            'synopsis'       => 'required|string',
            'poster_url'     => 'nullable|url',
            'is_recommended' => 'boolean',
        ]);

        $validated['is_recommended'] = $request->has('is_recommended');

        $animation = Animation::create($validated);

        return redirect()->route('animations.show', $animation->id)
            ->with('success', "Film \"{$animation->title}\" berhasil ditambahkan! 🎬");
    }

    // ── UPDATE ────────────────────────────────────────────────────
    public function edit($id)
    {
        $animation = Animation::find($id);
        if (!$animation) abort(404);
        $countries = Country::all();
        return view('animations.edit', compact('animation', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $animation = Animation::find($id);
        if (!$animation) abort(404);

        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'country_id'     => 'required|exists:countries,id',
            'genre'          => 'required|string|max:100',
            'year'           => 'required|integer|min:1900|max:2099',
            'rating'         => 'required|numeric|min:0|max:10',
            'box_office'     => 'nullable|numeric|min:0',
            'synopsis'       => 'required|string',
            'poster_url'     => 'nullable|url',
            'is_recommended' => 'boolean',
        ]);

        $validated['is_recommended'] = $request->has('is_recommended');

        $animation->update($validated);

        return redirect()->route('animations.show', $animation->id)
            ->with('success', "Film \"{$animation->title}\" berhasil diperbarui! ✨");
    }

    // ── DELETE ────────────────────────────────────────────────────
    public function destroy($id)
    {
        $animation = Animation::find($id);
        if (!$animation) abort(404);

        $title = $animation->title;
        $animation->delete();

        return redirect()->route('animations.index')
            ->with('success', "Film \"{$title}\" berhasil dihapus.");
    }

    // ── COUNTRIES CRUD ────────────────────────────────────────────
    public function countries()
    {
        $countries = Country::with('animations')->withCount('animations')->get();
        return view('animations.countries', compact('countries'));
    }

    public function storeCountry(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:100',
            'flag_emoji' => 'required|string|max:10',
        ]);

        Country::create($validated);

        return redirect()->route('countries.index')
            ->with('success', "Negara \"{$validated['name']}\" berhasil ditambahkan!");
    }

    public function destroyCountry($id)
    {
        $country = Country::find($id);
        if (!$country) abort(404);

        $name = $country->name;
        $country->delete();

        return redirect()->route('countries.index')
            ->with('success', "Negara \"{$name}\" berhasil dihapus.");
    }
}
