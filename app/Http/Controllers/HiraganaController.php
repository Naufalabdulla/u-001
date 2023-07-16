<?php

namespace App\Http\Controllers;

use App\Models\hiragana;
use Illuminate\Http\Request;

class HiraganaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = hiragana::all()->random(4);
        $hiragana = $data->random();
        return view('hiragana', ['hiragana' => $hiragana, 'alphabet' => $data]);
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
    public function show(hiragana $hiragana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hiragana $hiragana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hiragana $hiragana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hiragana $hiragana)
    {
        //
    }
}
