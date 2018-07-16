<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name','email', 'password','date','sexe','avatars',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function amies()
    {

        return $this->belongsToMany(User::class, 'amies','users_id','amie_id');
    }


    

    public function suit($user)
    {

        return $this->amies()->where('amie_id', $user->id)->exists();
    }
   
}
