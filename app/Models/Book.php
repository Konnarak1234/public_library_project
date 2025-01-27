<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable = [
        'book_name',
        'book_cate_id',
        'book_author',
        'book_publiser',
        'book_description',
        'book_image',
        'book_source'
    ];
}
