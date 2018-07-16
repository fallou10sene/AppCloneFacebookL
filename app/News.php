<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News extends Model
{
    protected $fillable = [
       'title','file',
    ];

    public function publications()
    {

        return $this->belongsTo(User::class,'users_id');
    }
}
