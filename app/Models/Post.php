<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // mendefinisikan kolom table yang bisa diisi
    protected $fillable = [
        'title', 'body'
    ];
}
