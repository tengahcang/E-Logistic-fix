<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Laporan;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view("laporan.create",[
            "barangs" => $barang
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $file=$request->file("Foto");
        $endcripsen=$file->hashName();
        $file->store("public/files");
        $laporan= New Laporan;
        $laporan->user_id=$request->Nama;
        $laporan->barang_id=$request->Alat;
        $laporan->descripsi=$request->Deskripsi;
        $laporan->foto=$endcripsen;
        $laporan->save();
        return redirect()->route("home");
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
