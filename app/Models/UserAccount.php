<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;
    protected $table = "user_account" ;
    protected $fillable = [
        'user_name',
        'user_email',
        'user_pwd',
        'user_tel',
        'user_img',
        'role_id'
    ];
   
}
