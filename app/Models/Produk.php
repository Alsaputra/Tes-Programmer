<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['kategori_id', 'status_id', 'nama_produk', 'harga'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategori');
    }
    public function status(){
        return $this->belongsTo(Status::class, 'status_id', 'id_status');
    }
}
