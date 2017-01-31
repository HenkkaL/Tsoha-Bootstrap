<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  View::make('suunnitelmat/etusivu.html');
    }

    public static function sandbox(){
        // Testaa koodiasi täällä
        $juoksijat = Juoksija::all();
        $juoksija = Juoksija::find(1);
        $startit = Startti::all();
        $startti = Startti::find(1);
        $lenkit = Lenkki::all();
        $lenkki = Lenkki::find(1);
        $tapahtumat = Tapahtuma::all();
        $tapahtuma = Tapahtuma::find(1);
        $osallistujat = Osallistuja::all();
        
        Kint::dump($juoksijat);
        Kint::dump($juoksija);
        Kint::dump($startit);
        Kint::dump($startti);
        Kint::dump($lenkit);
        Kint::dump($lenkki);
        Kint::dump($tapahtumat);
        Kint::dump($tapahtuma);
        Kint::dump($osallistujat);        
    }

    public static function etusivu(){
      View::make('suunnitelmat/etusivu.html');
    }

    public static function lenkki_lista(){
      View::make('suunnitelmat/lenkki_lista.html');
    }

    public static function lenkki_esittely(){
      View::make('suunnitelmat/lenkki_esittely.html');
    }

    public static function lenkki_muokkaus(){
      View::make('suunnitelmat/lenkki_muokkaus.html');
    }

    public static function omasivu(){
      View::make('suunnitelmat/omasivu.html');
    }

    public static function register(){
      View::make('suunnitelmat/register.html');
    }

    public static function login(){
      View::make('suunnitelmat/login.html');
    }

    public static function lenkki_kanta(){
      View::make('suunnitelmat/lenkki_kanta.html');
    }

    public static function lenkki_lahto(){
      View::make('suunnitelmat/lenkki_lahto.html');
    }
    
  }
