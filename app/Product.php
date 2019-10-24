<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  
	protected $table = 'products';

	    protected $primaryKey = 'id';
protected $fillable = [
        'name', 'description','image', 'user_id','category_id',
    ];
	
	public function user() {
		return $this->belongsTo('app\User');
	}
	public function category() {
		return $this->belongsTo('app\Category');
	}
}
