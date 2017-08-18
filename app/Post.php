<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Create a protected field called fillable in the model, otherwise it will throw a mass assginment exception.
    protected $fillable = ['title', 'post'];
}
