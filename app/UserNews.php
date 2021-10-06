<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNews extends Model
{
    protected $table = 'news';
    protected $fillable = ['category', 'news', 'img_id', 'news_views', 'name_id'];

    public function getUserImgAttribute()
    {
        return "/storage/uploads/". $this->img_id;
    }

    public function user() {
        return $this->belongsTo(Users::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }


}


