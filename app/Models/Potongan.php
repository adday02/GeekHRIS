<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    protected $table='potongans';
    protected $primaryKey = 'id_kasbon';
    protected $fillable = [ 'id_kasbon', 'username','nominal', 'keterangan'];
    public $timestamps = false;

    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
