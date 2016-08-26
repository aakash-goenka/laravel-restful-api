<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
	public function user(){
    	return $this->belongsTo('App\User', 'author');
    }

    /**
     * Get return values
     * @return array
     */
    public function _out(){
        return array(
            'id' => $this->id,
            'author' => $this->user->name,
            'text' => $this->text,
            'createTime' => date('Y-m-d H:i:s', strtotime($this->created_at))
        );
    }
}
