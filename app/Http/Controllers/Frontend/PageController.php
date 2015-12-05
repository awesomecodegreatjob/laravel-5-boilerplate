<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class PageController
 *
 * @package App\Http\Controllers
 */
class PageController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		javascript()->put([
			'test' => 'Injected from Frontend\PageController::index()'
		]);

		return view('frontend.controllers.page.index');
	}
}