<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $primaryKey = 'username';
    protected $fillable = [ 'username', 'password', 'nama', 'email', 'id_gaji_pokok','divisi','tanggal_lahir',  'jenis_kelamin', 'alamat', 'agama', 'no_hp', 'pic', 'foto','jabatan','nominal', 'status' ];
    public $timestamps = false;
    protected $keyType = 'string';

    public function GajiPokok()
    {
	return $this->belongsTo('App\Models\GajiPokok','id_gaji_pokok');
    }
}
