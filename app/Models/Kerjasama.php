<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    protected $table='kerjasamas';
    protected $primaryKey = 'id_kerjasama';
    protected $fillable = [ 'id_kerjasama', 'id_performance','penilain','dinilai','menisi_partner','koordinasi','empati'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
