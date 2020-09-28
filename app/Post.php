<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Post extends Model
{
   use Translatable;

   public function comments()
   {
   		return $this->hasMany('App\PostComment');
   }
}
