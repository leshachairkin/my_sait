<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNews extends Model
{
    protected $table = 'user_news';
    protected $fillable = ['category_id', 'user_id', 'userNews', 'userImg_id'];

    public function getUserImgAttribute()
    {
        return "/storage/uploads/". $this->userImg_id;
    }

    public function user() {
        return $this->belongsTo(Users::class);
    }


}


