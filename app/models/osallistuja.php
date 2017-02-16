<?php
class Osallistuja extends BaseModel{
    /*Osallistuja -luokka huolehtii osallistuja nimiseen liitostauluun kohdistuvista
    toimista. Luokassa etsintä- ja listausmetodien lisäksi metodi uusien osallistujien
     * lisäämiseksi ja olemassaolevien poistamiseksi. */
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
        
        public static function tapahtumanJuoksijat($tapahtuma){
                       $query = DB::connection()->prepare('SELECT knimi FROM Osallistuja LEFT JOIN Juoksija ON Osallistuja.juoksija = Juoksija.id WHERE Osallistuja.tapahtuma = :tapahtuma');
            $query->execute(array('tapahtuma' => $tapahtuma));
            $rows = $query->fetchAll();
            $juoksijat = array();
            
            foreach($rows as $row){
                $juoksijat[] = new Juoksija(array(
                    'knimi' => $row['knimi']
                ));
            }
            return $juoksijat;
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