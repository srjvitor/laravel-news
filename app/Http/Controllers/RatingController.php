<?php

namespace App\Http\Controllers;


use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class RatingController extends Controller{
	
  public function store($request){
    $rating = new Rating;

    $rating->note = $request->note;
    $rating->notice_id = $request->notice_id;
    $rating->user_id = $request->user_id;

    if( $rating->save()) {
      return redirect()->route('login', ['register' => true]);
    }
	}
	public function index($notice_id) {
		$notice = DB::table('ratings')		
			->where([
				['notice_id', '=', $notice_id],
			])
      ->select(
				DB::raw('round(avg(note), 2) AS note'),
				DB::raw('count(note) AS ratingCount')
      )
      ->first();

    return $notice;
	}
	
  public function show($id){
    
	}	
}
