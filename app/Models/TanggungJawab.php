<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TanggungJawab extends Model
{
    protected $table='tanggung_jawabs';
    protected $primaryKey = 'id_tanggung_jawab';
    protected $fillable = [ 'id_tanggung_jawab', 'id_performance','penilain','dinilai','tepat_waktu','kerahasiaan','sarana','kebersihan','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
