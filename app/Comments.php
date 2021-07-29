<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['text', 'news_id', 'user_id', 'reply'];
    protected $table = 'comments';


        public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function news(){
            return $this->belongsTo(News::class, 'news_id');
    }

    public function categories() {
            return $this->belongsTo(Category::class,'name');
    }
}
