<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanGaji extends Model
{
    protected $table='laporan_gajis';
    protected $primaryKey = 'id_laporan_gaji';
    protected $fillable = [ 'id_laporan_gaji', 'username','bulan', 'nominal','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
