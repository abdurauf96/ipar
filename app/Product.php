<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Product extends Model
{
    use Translatable;
    protected $translatable=['name', 'description', 'body', 'quantity','weight','price','min_zakas', 'status'];
    
    public function category()
    {
    	return $this->belongsTo('App\CategoryProduct');
    }
}
