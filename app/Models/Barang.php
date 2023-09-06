<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    public $timestamps = false;
    // protected $fillable = [
    //   'id_barang',
    //   'nama_barang',
    //   'jumlah_stok',
    //   'jenis_barang',
    //   'harga_barang'
    // ];
    protected $guarded = [];
}
