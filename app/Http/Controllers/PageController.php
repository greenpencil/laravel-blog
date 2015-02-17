<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function index()
	{
		$posts = Post::all();
		return view('pages/index' ['posts' => $posts]);
	}

}
