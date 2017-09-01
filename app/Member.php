<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $primaryKey = 'scrolls_id';
    public function colleges(){
    	return $this->belongsTo('App\College', 'college_id');
    }
}
