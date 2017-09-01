<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
	protected $fillable = [
		'college_name'
	];
	public $timestamps = false;
    public function members(){
    	return $this->hasMany('App\Member');
    }
}
