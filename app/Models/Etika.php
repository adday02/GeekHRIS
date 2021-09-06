<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etika extends Model
{
    protected $table='etikas';
    protected $primaryKey = 'id_etika';
    protected $fillable = [ 'id_etika', 'id_performance','penilain','dinilai','sikap_tuturkata','jujur_tanggungjawab','pakaian_rapi','status'];
    public $timestamps = false;
    protected $keyType = 'integer';
    
    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }}
