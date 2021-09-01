<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totalgaji extends Model
{
    protected $table='totalgajis';
    protected $primaryKey = 'id_totalgaji';
    protected $fillable = [ 'id_totalgaji', 'username','bulan', 'nominal','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
