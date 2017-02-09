<?php

class UserController extends BaseController{
    public static function login(){
        View::make('user/login.html');
    }
    public static function handle_login(){
        $params = $_POST;
        
        $user = Juoksija::authenticate($params['knimi'], $params['salasana']);
        
        if(!$user){
            View::make('user/login.html', array('error' => 'Väärä käyttäjätunnus tai salasana!', 'knimi' => $params['knimi']));
        } else {
            $_SESSION['user'] = $user->id;
            Redirect::to('/', array('message' => 'Olet kirjautunut lenkkikerhoon käyttäjänimellä ' . $user->knimi . '.'));
        }
    }
}
