<?php

namespace App\Http\Controllers;


use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RatingController;
use Redirect;

class NoticeController extends Controller
{
  public function index($category){
		$ratingMethod = new RatingController();

    $notices = DB::table('notices')
			->join('users', 'users.id', '=', 'notices.user_id')
      ->select(			
        DB::raw('substr(text,1,500) AS text'),				
				'notices.id AS notice_id',
				'notices.text',
				'notices.category',
				'users.name As author'
      )
      ->where([
        ['category', '=', $category],
      ])
			->get();

		foreach ($notices as $key => $value) {				
			$notices[$key]->rating = $ratingMethod->index($value->notice_id);
		}

    return $notices;
  }

	public function store(Request $request){
		$notice = new Notice;

		$notice->text = $request->text;
		$notice->category = $request->category;
		$notice->user_id = $request->user_id;

		if( $notice->save()) {
			return redirect()->route('login', ['register' => true]);
		}
	}

	public function show($id){
		$notice = DB::table('notices')
			->join('users', 'users.id', '=', 'notices.user_id')
      ->select(					
				'notices.*',
				'users.name As author'
      )
      ->where([
        ['notices.id', '=', $id],
      ])
			->get();

    return $notice;
	}

	public function edit($id){
			//
	}

	public function update(Request $request, $id){
			//
	}

	public function destroy($id){
			//
	}
}
