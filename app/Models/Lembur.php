<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    protected $table='lemburs';
    protected $primaryKey = 'id_lembur';
    protected $fillable = [ 'id_lembur', 'username','tanggal', 'nominal'];
    public $timestamps = false;
    
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
