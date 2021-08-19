<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table='lowongans';
    protected $primaryKey = 'id_lowongan';
    protected $fillable = ['id_lowongan','nama_lowongan','persyaratan'];
    public $timestamps = false;
    protected $keyType = 'integer';

    
}
