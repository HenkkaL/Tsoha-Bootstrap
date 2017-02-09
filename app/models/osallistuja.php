<?php
class Osallistuja extends BaseModel{
	public $juoksija, $tapahtuma;
	public function __construct($attributes){
		parent::__construct($attributes);
	}
        
        public static function all(){
            $query = DB::connection()->prepare('SELECT * FROM Osallistuja');
            $query->execute();
            $rows = $query->fetchAll();
            $osallistujat = array();
            
            foreach($rows as $row){
                $osallistujat[] = new Osallistuja(array(
                    'juoksija' => $row['juoksija'],
                    'tapahtuma' => $row['tapahtuma'],
                ));
            }
            return $osallistujat;
        }
        
        public static function find($juoksija, $tapahtuma){
           $query = DB::connection()->prepare('SELECT * FROM Osallistuja WHERE juoksija = :juoksija AND tapahtuma = :tapahtuma LIMIT 1');
            $query->execute(array('juoksija' => $juoksija, 'tapahtuma' => $tapahtuma));
            $row = $query->fetch();
            
            if($row){
                $osallistuja = new Osallistuja(array(
                    'juoksija' => $row['juoksija'],
                    'tapahtuma' => $row['tapahtuma']
                ));
                return $osallistuja;
            }
            return null;
        }
        
        public static function juoksijanTapapahtumat($juoksija){
           $query = DB::connection()->prepare('SELECT * FROM Osallistuja WHERE juoksija = :juoksija');
            $query->execute(array('juoksija' => $juoksija));
            $rows = $query->fetchAll();
            $tapahtumat = array();
            
            foreach($rows as $row){
                $tapahtuma[] = new Tapahtuma(array(
                    'tapahtuma' => $row['tapahtuma']
                ));
            }
            return $tapahtumat;
        }
        
        public function save(){
            $query = DB::connection()->prepare('INSERT INTO Osallistuja (juoksija, tapahtuma) VALUES (:juoksija, :tapahtuma)');
            $query->execute(array('juoksija' => $this->juoksija, 'tapahtuma' => $this->tapahtuma));
            $row = $query->fetch();
        }        
        
        public function destroy(){
            $query = DB::connection()->prepare('DELETE FROM Osallistuja WHERE juoksija=:juoksija AND tapahtuma=:tapahtuma' );
            $query->execute(array('juoksija' => $this->juoksija, 'tapahtuma' => $this->tapahtuma));
            $row = $query->fetch();                       
        }
       
        
}