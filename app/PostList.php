<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostList extends Model
{
	// Create a protected field called fillable in the List mode, otherwise it will throw a mass assginment exception.
    protected $fillable = ['title', 'post'];
}
