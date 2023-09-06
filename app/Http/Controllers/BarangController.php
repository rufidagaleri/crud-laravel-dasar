<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.data',[
            'data' => $barang
        ]);
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
        // $nama_barang = $request->barang;
        // echo  $request->barang;
        $barang=Barang::create([
            'nama_barang' => $request->barang,
            'jumlah_stok' => $request->jumlah_barang,
            'harga_barang' => $request->harga_barang,
            'jenis_barang' => $request->jenis,
        ]);
        if ($barang) {
            return redirect()->back();
        }else{
            echo "Data gagal disimpan";
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::where('id_barang', $id)->first();
        return view('barang.ubah',[
            'data' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang=Barang::where('id_barang', $id)
        ->update([
            'nama_barang' => $request->barang,
            'jumlah_stok' => $request->jumlah_barang,
            'harga_barang' => $request->harga_barang,
            'jenis_barang' => $request->jenis,
        ]);
        if ($barang) {
            return redirect('/barang');
        }else{
            echo "Data gagal disimpan";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang=Barang::where('id_barang', $id)->delete();
        if ($barang) {
            return redirect()->back();
        }else{
            echo "Data gagal disimpan";
        }
    }
}
