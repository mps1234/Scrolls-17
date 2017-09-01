<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	public function domains()	{
		return $this->belongsTo('App\Domain');
	}
    public function teams(){
    	return $this->belongsTo('App\Team', 'id','topic_id');
    }
}
