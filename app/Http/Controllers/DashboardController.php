<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::select('produk.id_produk as id', 'produk.nama_produk as nama', 'produk.harga as harga', 'kategori.nama_kategori as nkategori', 'status.nama_status as nstatus')
        ->leftjoin('kategori', 'produk.kategori_id', '=', 'kategori.id_kategori')
        ->leftjoin('status', 'produk.status_id', '=', 'status.id_status')
        ->where('status.nama_status', 'bisa dijual')->get();
        $jual = Produk::selectRaw('count(produk.id_produk) as total')
        ->leftjoin('kategori', 'produk.kategori_id', '=', 'kategori.id_kategori')
        ->leftjoin('status', 'produk.status_id', '=', 'status.id_status')
        ->where('status.nama_status', 'bisa dijual')->first();
        $tidak = Produk::selectRaw('count(produk.id_produk) as total')
        ->leftjoin('kategori', 'produk.kategori_id', '=', 'kategori.id_kategori')
        ->leftjoin('status', 'produk.status_id', '=', 'status.id_status')
        ->where('status.nama_status', 'tidak bisa dijual')->first();
        $total = Produk::selectRaw('count(id_produk) as total')->first();
        // dd($produk);
        return view('index', ['produk' => $produk, 'jual' => $jual, 'tidak' => $tidak, 'total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
