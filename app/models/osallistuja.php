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

}