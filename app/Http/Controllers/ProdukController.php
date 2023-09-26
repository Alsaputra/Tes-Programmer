<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Status;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $produk = Produk::with(['kategori', 'status' => function ($query) {$query->where('nama_status', 'bisa dijual');}])->get();
        $produk = Produk::select('produk.id_produk as id', 'produk.nama_produk as nama', 'produk.harga as harga', 'kategori.nama_kategori as nkategori', 'status.nama_status as nstatus')
        ->leftjoin('kategori', 'produk.kategori_id', '=', 'kategori.id_kategori')
        ->leftjoin('status', 'produk.status_id', '=', 'status.id_status')
        ->where('status.nama_status', 'bisa dijual')->get();
        // dd($produk);
        return view('produk.produk', ['produk' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $status = Status::all();
        return view('produk.tambah_produk', ['kategori' => $kategori, 'status' => $status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->nama_produk = $request->nama; 
        $produk->kategori_id = $request->kategori; 
        $produk->harga = $request->harga; 
        $produk->status_id = $request->status; 
        $produk->save();
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        $status = Status::all();
        return view('produk.edit_produk', ['produk' => $produk, 'kategori' => $kategori, 'status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama_produk = $request->nama; 
        $produk->kategori_id = $request->kategori; 
        $produk->harga = $request->harga; 
        $produk->status_id = $request->status; 
        $produk->save();
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $produk = Produk::findOrFail($request->id);
        $produk->delete();
        return redirect('/produk');
    }

}
