<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemampuan extends Model
{
    protected $table='kemampuans';
    protected $primaryKey = 'id_kemampuan';
    protected $fillable = [ 'id_kemampuan', 'id_performance','penilain','dinilai', 'komunikatif','tugas','tekanan','kemampuan_kerjaan','bahasa','kreatif','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
