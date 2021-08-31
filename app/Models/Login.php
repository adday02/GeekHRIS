<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    protected $table="users";
    protected $primaryKey = 'username';
    protected $fillable = ['username', 'password']; //field tabel
    public $timestamps = false;
    protected $keyType = 'string';

}