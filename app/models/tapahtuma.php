<?php
class Tapahtuma extends BaseModel{
	public $id, $pvm, $aika, $kuvaus, $lenkki, $reitti, $startti, $matka, $osoite, $starttikuvaus;
	public function _construct($attributes){
		parent::_construct($attributes);
	}
        
        public static function all(){
            $query = DB::connection()->prepare('SELECT T.id AS id, L.nimi AS lenkki,'
                    . ' T.pvm AS pvm, T.aika AS aika,'
                    . ' L.matka AS matka, S.nimi AS startti'
                    . ' FROM Tapahtuma T LEFT JOIN Lenkki L ON T.lenkki=L.id'
                    . ' LEFT JOIN Startti S ON L.startti=S.id');
            $query->execute();
            $rows = $query->fetchAll();
            $tapahtumat = array();
            
            foreach($rows as $row){
                $tapahtumat[] = new Tapahtuma(array(
                    'id' => $row['id'],
                    'lenkki' => $row['lenkki'],
                    'startti' => $row['startti'],
                    'pvm' => $row['pvm'],
                    'aika' => $row['aika'],
                    'matka' => $row['matka'],
                ));
            }
            return $tapahtumat;
        }
        
        public static function find($id){
            $matka;
            $reitti;
            $startti;
            $query = DB::connection()->prepare('SELECT T.id AS id, L.nimi AS lenkki, T.pvm AS pvm, T.aika AS aika, L.matka AS matka,'
                    . ' S.nimi AS startti, S.osoite AS osoite, S.kuvaus AS starttikuvaus, L.reitti AS reitti, T.kuvaus AS kuvaus'
                    . ' FROM Tapahtuma T LEFT JOIN Lenkki L ON T.lenkki=L.id LEFT JOIN Startti S ON L.startti=S.id WHERE T.id = :id LIMIT 1');
            $query->execute(array('id' => $id));
            $row = $query->fetch();
            
            if($row){
                $tapahtuma = new Tapahtuma(array(
                    'id' => $row['id'],
                    'pvm' => $row['pvm'],
                    'aika' => $row['aika'],
                    'kuvaus' => $row['kuvaus'],
                    'lenkki' => $row['lenkki'],
                    'matka' => $row['matka'],
                    'reitti' => $row['reitti'],
                    'startti' => $row['startti'], 
                    'osoite' => $row['osoite'],
                    'starttikuvaus' => $row['starttikuvaus']                    
                ));
                return $tapahtuma;
            }
            return null;
        }
        public function save(){
            $query = DB::connection()->prepare('INSERT INTO Tapahtuma (pvm, aika, kuvaus, lenkki) VALUES (:pvm, :aika, :kuvaus, :lenkki) RETURNING id');
            $query->execute(array('pvm' => $this->pvm, 'aika' => $this->aika, 'kuvaus' => $this->kuvaus, 'lenkki' => $this->lenkki));
            $row = $query->fetch();
            $this->id = $row['id'];            
        }        

}