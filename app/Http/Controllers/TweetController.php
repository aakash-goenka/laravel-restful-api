<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TweetController extends Controller
{
	/**
    * Creates a new tweet
    * @return Response
    */
	public function create(Request $request){
		$tweet = new \App\Tweet;
	    $tweet->text = $request->input('text');
	    $tweet->author = 1;
	    $tweet->save();
	    return response($tweet->_out(), 201);
    }

    /**
    * Display the specified resource.
    * @param  int  $id
    * @return Response
    */
    public function view($id){
    	return \App\Tweet::find($id)->_out();
    }

    /**
    * Display the specified resource.
    * @return Response
    */
    public function getTweets(){
    	$id = 1;
    	//$id = Auth::user()->id;
    	//return $id;
    }

}
