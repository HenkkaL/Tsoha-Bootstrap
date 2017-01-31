<?php
class LenkkiController extends BaseController{
    public static function lenkkiLista(){
        $lenkit = Lenkki::all();
        View::make('suunnitelmat/lenkki_muokkaus.html', array('lenkit' => $lenkit));
    }
    
    public static function tapahtumaLista(){
        $tapahtumat = Tapahtuma::all();
        View::make('suunnitelmat/lenkki_lista.html', array('tapahtumat' => $tapahtumat));
    }
    
    public static function tapahtuma($id){
        $tapahtuma = Tapahtuma::find($id);
        View::make('suunnitelmat/lenkki_esittely.html', array('tapahtuma' => $tapahtuma));
    }
}
