<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	   protected $table = 'categories';

	    protected $primaryKey = 'id';
protected $fillable = [
        'name', 'description','image', 'user_id',
    ];
	
	public function user() {
		return $this->belongsTo('app\User');
	}
		public function products() {
		return $this->hasMany('app\Product');
	}
	
}
