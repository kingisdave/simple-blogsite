<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'image', 'user_id'];
    protected $primaryKey = 'blog_id';

    function user()
    {
        // return $this->belongsTo('User');
        return $this->belongsTo('App\Models\User');
    }

}
