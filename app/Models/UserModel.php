<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_users';
    protected $primaryKey = 'user_id';

    // @var array

    protected $fillable = ['level_id', 'username', 'nama', 'password']; //jika password di hapus maka akan terjadi eroor
}
