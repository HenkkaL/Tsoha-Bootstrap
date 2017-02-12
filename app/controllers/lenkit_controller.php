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
    
    public static function tapahtumaListaMuokkaus(){
        $tapahtumat = Tapahtuma::all();
        View::make('lenkki/tapahtuma_lista_muokkaus.html', array('tapahtumat' => $tapahtumat));
    }    
    
    public static function tapahtuma($id){
        $tapahtuma = Tapahtuma::find($id);
        $juoksijat = Osallistuja::tapahtumanJuoksijat($id);
        View::make('lenkki/lenkki_esittely.html', array('tapahtuma' => $tapahtuma, 'juoksijat' => $juoksijat));
    }
    
    
    public static function store(){
            $params = $_POST;
            $attributes = array(
                'pvm' => $params['pvm'],
                'aika' => $params['aika'],
                'kuvaus' => $params['kuvaus'],
                'lenkki' => $params['lenkki']
                );
            $tapahtuma = new Tapahtuma($attributes);
            $errors = $tapahtuma->errors();
            
            if(count($errors) == 0){
                $tapahtuma->save();
                Redirect::to('/lenkki_esittely/'.$tapahtuma->id, array('message' => 'Lenkkitapahtuma lisätty'));
            }  else { View::make('lenkki/lenkki_muokkaus.html', array('errors' => $errors, 'attributes' => $attributes));
            }                
        }
    public static function edit($id){
        $tapahtuma = Tapahtuma::find($id);
        View::make('lenkki/tapahtuma_muokkaa.html', array('tapahtuma' => $tapahtuma));
    }        
        
        public static function update($id){
            $params = $_POST;
            
            $attributes = array(
                'id' => $id,
                'pvm' => $params['pvm'],
                'aika' => $params['aika'],
                'kuvaus' => $params['kuvaus'],
                'lenkki' => $params['lenkki']
            );
            $tapahtuma = new Tapahtuma($attributes);
            $errors = $tapahtuma->errors();
            
            if(count($errors) == 0){
                $tapahtuma->update();
                Redirect::to('/lenkki_esittely/'.$tapahtuma->id, array('message' => 'Lenkkitapahtuma muokattu'));
            }  else { View::make('lenkki/lenkki_muokkaus.html', array('errors' => $errors, 'attributes' => $attributes));
        }                          
    }  
    
        public static function destroy($id){
            $tapahtuma = new Tapahtuma(array('id' => $id));
            $tapahtuma->destroy();
                
            View::make('/lenkki/tapahtuma_poistettu.html', array('message' => 'Tapahtuma on poistettu'));
        }    
}
