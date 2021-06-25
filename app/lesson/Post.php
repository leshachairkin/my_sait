<?php

namespace App\lesson;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','description'
    ];
}
