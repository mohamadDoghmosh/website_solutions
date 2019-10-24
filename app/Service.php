<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
	   protected $table = 'services';

	    protected $primaryKey = 'id';
protected $fillable = [
        'name', 'description','image', 'user_id',
    ];
	
	public function user() {
		return $this->belongsTo('app\User');
	}
	
}
