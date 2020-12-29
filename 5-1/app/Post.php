<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [   
        'user_id', 'body',
    ];

    public function user() // 単数形
    {
        return $this->belongsTo(\App\User::class,'user_id');
    }
}
