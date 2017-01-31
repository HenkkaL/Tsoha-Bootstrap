<?php
class Startti extends BaseModel{
	
	public $id, $nimi, $osoite, $kuvaus;
        public function _construct($attributes){
		parent::_construct($attributes);
	}
        
        public static function all(){
            $query = DB::connection()->prepare('SELECT * FROM Startti');
            $query->execute();
            $rows = $query->fetchAll();
            $startit = array();
            
            foreach($rows as $row){
                $startit[] = new Startti(array(
                    'id' => $row['id'],
                    'nimi' => $row['nimi'],
                    'osoite' => $row['osoite'],
                    'kuvaus' => $row['kuvaus'],
                ));
            }
            return $startit;
        }
        
        public static function find($id){
            $query = DB::connection()->prepare('SELECT * FROM Startti WHERE id = :id LIMIT 1');
            $query->execute(array('id' => $id));
            $row = $query->fetch();
            
            if($row){
                $startti = new Juoksija(array(
                    'id' => $row['id'],
                    'nimi' => $row['nimi'],
                    'osoite' => $row['osoite'],
                    'kuvaus' => $row['kuvaus'],
                ));
                return $startti;
            }
            return null;
        }

}