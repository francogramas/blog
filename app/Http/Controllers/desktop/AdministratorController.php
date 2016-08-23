<?php namespace SmartKet\Http\Controllers\desktop;

use SmartKet\Http\Requests;
use SmartKet\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdministratorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function panel()
	{
		return view('administrator/panel');
	}

	public function acces()
	{
		return view('administrator/acces');
	}

	public function reports()
	{
		return view('administrator/reports');
	}
}