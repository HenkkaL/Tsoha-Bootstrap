<?php

  class JuoksijaController extends BaseController{

    public static function juoksijalista(){
        $juoksijat = Juoksija::all();
        View::make('asiakas/juoksijalista.html', array('juoksijat' => $juoksijat));
    }      
    
    public static function juoksija($id){
        $juoksija = Juoksija::find($id);
        View::make('asiakas/omasivu.html', array('juoksija' => $juoksija));
    }
    
    
    public static function store(){
            $params = $_POST;
            $juoksija = new Juoksija(array(
                'etunimi' => $params['etunimi'],
                'sukunimi' => $params['sukunimi'],
                'sposti' => $params['sposti'],
                'knimi' => $params['knimi'],
                'salasana' => $params['salasana']
                ));
            $juoksija->save();
            
            Redirect::to('/omasivu/'.$juoksija->id, array('message' => 'Uusi juoksija lisätty'));
            
            
        }    
  }
