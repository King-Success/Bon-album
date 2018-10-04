<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_Picture extends Model
{
    protected $guarded = [];
    protected $table = 'profile_pictures';

    public function album(){
       return $this->hasOne("App\Album");
    }

}
