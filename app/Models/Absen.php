<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table='absens';
    protected $primaryKey = 'id_absen';
    protected $fillable = [ 'id_absen', 'username',  'status','tanggal'];
    public $timestamps = false;
    protected $keyType = 'integer';

    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
