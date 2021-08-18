<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiPokok extends Model
{
    protected $table='gaji_pokoks';
    protected $primaryKey = 'id_gaji_pokok';
    protected $fillable = [ 'id_gaji_pokok', 'jabatan', 'nominal'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
   
}
