<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookGenre extends Model
{
    use HasFactory;

    protected $table = 'books_genres';

    protected $fillable = [
        'book_id',
        'genre_id',
    ];
}
