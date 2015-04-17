<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $oUser = new \App\User;
        $oClub = new \App\Club;
        $clubes_ids = array();

        $users = $oUser::where('ACTIVO', '=', 1)->get();

        foreach($users as $user){
            $clubes_ids[] = $user->CLUB_ID;
        }

        $clubes = $oClub::whereIn("ID", $clubes_ids)->get();

		return view('login', array('clubes'=>$clubes));
	}

}
