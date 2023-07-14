<?php

namespace App\Http\Controllers;

use App\Models\kanji;
use Illuminate\Http\Request;

class KanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kanji');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kanji $kanji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kanji $kanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kanji $kanji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kanji $kanji)
    {
        //
    }
}
