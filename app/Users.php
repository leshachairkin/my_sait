<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Nullable;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','avatar_id'];

//    public function getAvatarAttribute(){
//        if(file_exists(storage_path('app/public/avatars').$this->avatar_id)){
//            return storage_path('app/public/avatars').$this->avatar_id;
//
//        }
//        return '/images/no-image.png';
//    }

    public function  getAvatarAttribute()
    {
        if (!empty($this->avatar_id)) {
            return "/storage/avatars/" . $this->avatar_id;
        }

        return "/images/no_foto.png";
    }


}
