<?php

namespace App\Http\Controllers;

use App\Models\katakana;
use Illuminate\Http\Request;

class KatakanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('katakana');
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
    public function show(katakana $katakana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(katakana $katakana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, katakana $katakana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(katakana $katakana)
    {
        //
    }
}
