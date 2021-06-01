<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //この部分で一対多の関係を作っている
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
