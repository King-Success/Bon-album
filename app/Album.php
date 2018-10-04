<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


class Album extends Model
{
    use SearchableTrait;
    use SoftDeletes;

    protected $searchable = [
        'columns' => [
            'albums.name' => 15,
            'albums.id' => 10
        ]
    ];

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function groupPictures(){
        return $this->hasMany('App\Group_Picture');
    }

    public function profiles(){
        return $this->belongsToMany('App\Profile', 'album_profiles');
    }

    
}
