<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  View::make('etusivu.html');
    }

    public static function sandbox(){
        // Testaa koodiasi täällä
        $osallistujat = Osallistuja::all();
        $id = 46;
        $testi = Juoksija::findTapahtumat($id);
        
        Kint::dump($osallistujat);
        Kint::dump(self::get_user_logged_in()->id);
    }

    public static function etusivu(){
      View::make('etusivu.html');
    }

    public static function lenkki_lista(){
      View::make('lenkki/lenkki_lista.html');
    }

    public static function lenkki_esittely(){
      View::make('lenkki/lenkki_esittely.html');
    }

    public static function lenkki_muokkaus(){
      View::make('lenkki/lenkki_muokkaus.html');
    }

    public static function omasivu(){
      View::make('asiakas/omasivu.html');
    }

    public static function register(){
      View::make('asiakas/register.html');
    }

    public static function login(){
      View::make('asiakas/login.html');
    }

    public static function lenkki_kanta(){
      View::make('lenkki/lenkki_kanta.html');
    }

    public static function lenkki_lahto(){
      View::make('lenkki/lenkki_lahto.html');
    }
    
    public static function admin(){
      View::make('asiakas/admin.html');
    }  
    
    public static function lenkki_uusi(){
      View::make('lenkki/lenkki_uusi.html');
    } 
    
  }
