<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $primaryKey = 'username';
    protected $fillable = [ 'username', 'password', 'nama', 'email', 'divisi', 'pic', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'agama', 'no_hp', 'foto', 'status' ];
    public $timestamps = false;
    protected $keyType = 'string';
}
