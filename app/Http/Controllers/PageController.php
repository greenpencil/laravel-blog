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
		$settingsData = Setting::all();
		foreach($settingsData as $setting)
		{
			$settings[$setting->key] = $setting->value;
		}
		return view('pages/index', ['featured' => $featured], ['settings' => $settings]);
	}

}
