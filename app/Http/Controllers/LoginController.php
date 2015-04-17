<?php namespace App\Http\Controllers;

class LoginController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('login');
    }

    public function register(){
        $oClub = new \App\Club;
        $clubes = $oClub::all();

        return view('register', array('clubes'=>$clubes));
    }

    public function activate(){
        $name       = \Input::get('username');
        $password   = \Input::get('password');
        $club       = \Input::get('club');

        $user = new \App\User;

        $user->USERNAME = $name;
        $user->PASSWORD = \Hash::make($password);
        $user->CLUB_ID  = $club;
        $user->TOKEN    = "1234567890";

        if($user->save()){

            $dbclub = new \App\Club;
            $oClub = $dbclub::where("ID", $user->CLUB_ID)->get();

            $data = array(
                'id_club'   => $oClub[0]['ID'],
                'club'      => $oClub[0]['NOMBRE'],
                'email'     => $oClub[0]['EMAIL'],
                'username'  => $name,
                'password'  => $password,
                'token'     => $user->TOKEN
            );

            $message = "Benvenido";
            \Mail::send('emails/confirmation', $data, function($message) use ($data)
            {
                $message
                    ->to($data['email'], $data['club'])
                    ->subject("Convención 2015 AMCH - ". $data['club']);
            });
            //$user->ACTIVO  = 1;

            return redirect('/');
        }


    }



    public function activate2($token, $club, $email){
        $dbuser = new \App\User;
        $user   = $dbuser::where("TOKEN", $token)
            ->where("CLUB_ID", $club)

            ->get()
        ;
        if(count($user) > 0){
            $dbclub = new \App\Club;
            $club = $dbclub::where("ID", $club)
                ->where("EMAIL", $email)
                ->get();
            if(count($club) > 0){
                $updated = \App\User::where('ID', $user[0]->ID)->update(['ACTIVO' => 1]);
                if($updated > 0){
                    return redirect('/');
                }else{
                    return redirect('/404');
                }
            }
        }

    }

}