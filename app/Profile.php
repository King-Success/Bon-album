<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Authenticatable
{  
    use Notifiable;
    
    protected $dates = ['deleted_at'];
    protected $guarded = [];
    use SoftDeletes;


    public function albums(){
        return $this->belongsToMany('App\Album', 'album_profiles');
    }

    public function pictures(){
        return $this->hasMany('App\Profile_Picture');
    }

    
}
