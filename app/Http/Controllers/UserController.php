<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    /**
    * Updates user (follow/unfollow)
    * @return Response
    */
	public function update($id, Request $request){
		return $id;
		$act = $request->input('action');
		$followId = $request->input('id');
		if($act == 'follow'){
			$follow = new \App\Follow;
		    $follow->user_id = $id;
		    $follow->following = $followId;
		    $follow->save();
		    return response($follow->_out(), 201);
		}elseif($act == 'unfollow'){
			return \App\Follow::unfollow($id, $followId);
    		//return response('Deleted.', 200)
		}
	}
}
