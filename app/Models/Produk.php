<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['kategori_id', 'status_id', 'nama_produk', 'harga'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori', 'kategori_id');
    }
    public function status(){
        return $this->belongsTo(Status::class, 'id_status', 'status_id');
    }
}
