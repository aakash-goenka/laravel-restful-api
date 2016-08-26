<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
	public static function unfollow($id1, $id2){
		return DB::table('follows')->where([
		    ['user_id', '=', $id1],
		    ['following', '=', $id2],
		])->delete();
	}
}
