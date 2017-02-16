<?php

class UserController extends BaseController {
    /*UserController huolehtii kirjautumiseen, kirjautumisen tarkastamiseen ja 
     * uloskirjautumiseen liittyvistä toimista */

    public static function login() {
        View::make('asiakas/login.html');
    }

    public static function handle_login() {
        $params = $_POST;

        $user = Juoksija::authenticate($params['knimi'], $params['salasana']);

        if (!$user) {
            View::make('asiakas/login.html', array('error' => 'Väärä käyttäjätunnus tai salasana!', 'knimi' => $params['knimi']));
        } else {
            $_SESSION['user'] = $user->id;
            Redirect::to('/', array('message' => 'Olet kirjautunut lenkkikerhoon käyttäjänimellä ' . $user->knimi . '.'));
        }
    }

    public static function logout() {
        $_SESSION['user'] = null;
        Redirect::to('/', array('message' => 'Olet kirjautunut ulos'));
    }

    public static function check_admin() {
        if (BaseController::get_user_logged_in()->knimi != 'admin') {
            View::make('/etusivu.html', array('message' => 'Et ole kirjautunut pääkäyttäjäoikeuksin'));
        }
    }

}
