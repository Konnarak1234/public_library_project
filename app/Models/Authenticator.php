<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authenticator extends Model
{
    use HasFactory;
    protected $table = 'authenticate';
    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
