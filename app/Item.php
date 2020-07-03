<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = [
        'title', 'body', 'image' , 'date' , 'user_id'
    ];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
