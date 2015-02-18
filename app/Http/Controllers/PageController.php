<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Featured;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PageController extends Controller {

	public function index()
	{
		$featured = Featured::where('visible', '=', 1)->get();
		$settings = Setting::all();

		return view('pages/index', ['featured' => $featured], ['settings' => $settings]);
	}

}
