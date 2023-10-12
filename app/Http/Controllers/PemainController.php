<?php

namespace App\Http\Controllers;

use App\Models\PemainModel;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemain = PemainModel::all();
        return view('index', compact('pemain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemain_baru = new PemainModel;
        $pemain_baru->nama_pemain = $request->nama_pemain;
        $pemain_baru->no_punggung = $request->no_punggung;
        $pemain_baru->posisi = $request->posisi;
        $pemain_baru->save();
        return redirect('/pemain');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
