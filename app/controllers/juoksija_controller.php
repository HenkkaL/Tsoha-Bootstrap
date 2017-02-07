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
            $attributes = array(
                'etunimi' => $params['etunimi'],
                'sukunimi' => $params['sukunimi'],
                'sposti' => $params['sposti'],
                'knimi' => $params['knimi'],
                'salasana' => $params['salasana']
                );
            $juoksija = new Juoksija($attributes);
            $errors = $juoksija->errors();
            
            
            if(count($errors) == 0){
                $juoksija->save();
                Redirect::to('/omasivu/' .$juoksija->id, array('message' => 'Uusi juoksija lisätty'));                
            } else { View::make('asiakas/register.html', array('errors' => $errors, 'attributes' => $attributes));
            }              
        }   
        
        public static function edit($id){
            $juoksija = Juoksija::find($id);
            View::make('asiakas/juoksija_muokkaa.html', array('juoksija' => $juoksija));
        }
        
        public static function update($id){
            $params = $_POST;
            
            $attributes = array(
                'id' => $id,
                'etunimi' => $params['etunimi'],
                'sukunimi' => $params['sukunimi'],
                'knimi' => $params['knimi'],
                'sposti' => $params['sposti'],
                'salasana' => $params['salasana'],
            );
            $juoksija = new Juoksija($attributes);
            $errors = $juoksija->errors();
            
            if(count($errors) > 0) {
                View::make('asiakas/juoksija_muokkaa.html', array('errors' => $errors, 'juoksija' => $juoksija));
            } else {
                    $juoksija->update();
                    Redirect::to('/omasivu/' .$juoksija->id, array('message' => 'Tiedot päivitetty'));
            }                   
        }
        
        public static function destroy($id){
            $juoksija = new Juoksija(array('id' => $id));
            $juoksija->destroy();
                
            View::make('/asiakas/juoksija_poistettu.html', array('message' => 'Juoksijan asiakastiedot on poistettu'));
        }
  }
