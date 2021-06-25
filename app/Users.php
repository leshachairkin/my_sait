<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','avatar'];

//    public function getAvatarAttribute(){
//        if(file_exists(storage_path('app/public/foto').$this->avatar)){
//            return storage_path('app/public/foto').$this->avatar;
//        }
//        return './images.jps';
//}
}
