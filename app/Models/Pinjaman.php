<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table='pinjamans';
    protected $primaryKey = 'id_pinjaman';
    protected $fillable = ['id_pinjaman', 'username','tanggal','nominal', 'keterangan','status'];
    public $timestamps = false;

    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
