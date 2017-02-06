<?php
class LenkkiController extends BaseController{
    public static function lenkkiLista(){
        $lenkit = Lenkki::all();
        View::make('lenkki/lenkki_muokkaus.html', array('lenkit' => $lenkit));
    }
    
    public static function lenkkiUusi(){
        $lenkit = Lenkki::all();
        View::make('lenkki/lenkki_uusi.html', array('lenkit' => $lenkit));
    }

    public static function lenkkiTapahtumaUusi($id){
        $lenkki = Lenkki::find($id);
        View::make('lenkki/lenkki_tapahtuma_uusi.html', array('lenkki' => $lenkki));
    }    
    
    
    public static function tapahtumaLista(){
        $tapahtumat = Tapahtuma::all();
        View::make('lenkki/lenkki_lista.html', array('tapahtumat' => $tapahtumat));
    }
    
    public static function tapahtuma($id){
        $tapahtuma = Tapahtuma::find($id);
        View::make('lenkki/lenkki_esittely.html', array('tapahtuma' => $tapahtuma));
    }
    
    
    public static function store(){
            $params = $_POST;
            $tapahtuma = new Tapahtuma(array(
                'pvm' => $params['pvm'],
                'aika' => $params['aika'],
                'kuvaus' => $params['kuvaus'],
                'lenkki' => $params['lenkki']
                ));
            $tapahtuma->save();
            
            Redirect::to('/lenkki_esittely/'.$tapahtuma->id, array('message' => 'Lenkkitapahtuma lisätty'));
            
            
        }
        
        
        
}
