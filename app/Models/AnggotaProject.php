<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaProject extends Model
{
    protected $table='anggota_projects';
    protected $primaryKey = 'id_anggota_project';
    protected $fillable = [ 'id_anggota_project', 'username',  'id_project'];
    public $timestamps = false;
    protected $keyType = 'integer';

    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
    public function project()
    {
	return $this->belongsTo('App\Models\Project','id_project');
    }
}
