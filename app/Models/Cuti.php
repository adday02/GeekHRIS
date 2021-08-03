<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table='cutis';
    protected $primaryKey = 'id_cuti';
    protected $fillable = [ 'id_cuti', 'username', 'tanggal', 'keterangan','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
