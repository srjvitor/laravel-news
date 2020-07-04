<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NoticeController;

use Illuminate\Http\Request;

class HomeController extends Controller{

	public function index($category = 1){

		$notices = new NoticeController();

		return view('home.feed', [
			'notices' => $notices->index($category)
		]);
	}
}
