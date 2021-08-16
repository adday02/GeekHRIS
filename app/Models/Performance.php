<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $table='penilaian_pegawais';
    protected $primaryKey = 'id_performance';
    protected $fillable = [ 'id_performance', 'username','tahun', 'semester'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
