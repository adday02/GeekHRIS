<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disiplin extends Model
{
    protected $table='disiplins';
    protected $primaryKey = 'id_disiplin';
    protected $fillable = [ 'id_disiplin', 'id_performance','penilain','dinilai','kerja','waktu','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
