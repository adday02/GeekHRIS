<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiPokok extends Model
{
    protected $table='gajipokoks';
    protected $primaryKey = 'id_gajipokok';
    protected $fillable = [ 'id_gajipokok', 'jabatan', 'nominal'];
    public $timestamps = false;
    
    
   
}
