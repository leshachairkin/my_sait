<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['category', 'news', 'img_id', 'name_id'];


    public function getImageAttribute()
    {
        return "/storage/uploads/". $this->img_id;
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function viewed() {
        return $this->hasMany(Viewed::class);
    }

    public function user() {
        return $this->belongsTo(Users::class,'name_id','id');
    }

}
