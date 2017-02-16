<?php

class KaatoluokkaController extends BaseController {
    /*Tässä luokassa on joitain yleisiä metodeja liittyen lähinnä etusivuun, 
     * rekisteröitymiseen sekä kirjautumiseen. Luokassa on myös sandbox -metodi
     * jolla tehdään työnaikaisia testejä. */

    public static function index() {
        View::make('etusivu.html');
    }

    public static function sandbox() {
        $osallistujat = Osallistuja::all();
        $id = 46;
        $testi = Juoksija::findTapahtumat($id);

        Kint::dump($osallistujat);
        Kint::dump(self::get_user_logged_in()->id);
    }

    public static function etusivu() {
        View::make('etusivu.html');
    }

    public static function register() {
        View::make('asiakas/register.html');
    }

    public static function login() {
        View::make('asiakas/login.html');
    }

    public static function admin() {
        View::make('asiakas/admin.html');
    }

}
