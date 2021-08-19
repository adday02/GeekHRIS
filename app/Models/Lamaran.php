<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table='lamarans';
    protected $primaryKey = 'id_lamaran';
    protected $fillable = [ 'id_lamaran', 'id_lowongan','username', 'tanggal','file','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    

    public function Lowongan()
    {
	return $this->belongsTo('App\Models\Lowongan','id_lowongan');
    }

    public function User()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
