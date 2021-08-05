<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //use HasFactory;

    protected $table='projects';
    protected $primaryKey = 'id_project';
    protected $fillable = [ 'id_project', 'username',  'anggota','nama_project', 'tgl_mulai', 'tgl_deadline','preentase'];
    public $timestamps = false;
    protected $keyType = 'integer';

    public function user()
    {
	return $this->belongsTo('App\Models\User','username');
    }
}
