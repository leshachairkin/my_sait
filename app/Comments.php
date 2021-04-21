<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['text', 'news_id', 'user_id'];
    protected $table = 'comments';


        public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
