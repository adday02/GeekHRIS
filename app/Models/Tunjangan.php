<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
    protected $table='tunjangans';
    protected $primaryKey = 'id_tunjangan';
    protected $fillable = [ 'id_tunjangan', 'username','jenis', 'nominal'];
    public $timestamps = false;

    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
