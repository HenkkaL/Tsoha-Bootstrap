<?php
class Lenkki extends BaseModel{
	public $id, $nimi, $matka, $reitti, $startti;
	public function _construct($attributes){
		parent::_construct($attributes);
	}
        
        public static function all(){
            $query = DB::connection()->prepare('SELECT Lenkki.id AS id,'
                    . ' Lenkki.nimi AS nimi, Lenkki.matka AS matka,'
                    . ' Lenkki.reitti AS reitti, Startti.nimi'
                    . ' AS startti FROM Lenkki, Startti WHERE Lenkki.startti=Startti.id');
            $query->execute();
            $rows = $query->fetchAll();
            $lenkit = array();
            
            foreach($rows as $row){
                $lenkit[] = new lenkki(array(
                    'id' => $row['id'],
                    'nimi' => $row['nimi'],
                    'matka' => $row['matka'],
                    'reitti' => $row['reitti'],
                    'startti' => $row['startti']
                ));
            }
            return $lenkit;
        }
        
        public static function find($id){
            $query = DB::connection()->prepare('SELECT Lenkki.id AS id,'
                    . ' Lenkki.nimi AS nimi, Lenkki.matka AS matka,'
                    . ' Lenkki.reitti AS reitti, Startti.nimi'
                    . ' AS startti FROM Lenkki, Startti WHERE Lenkki.startti=Startti.id'
                    . ' AND Lenkki.id = :id LIMIT 1');
            $query->execute(array('id' => $id));
            $row = $query->fetch();
            
            if($row){
                $lenkki = new Lenkki(array(
                    'id' => $row['id'],
                    'nimi' => $row['nimi'],
                    'matka' => $row['matka'],
                    'reitti' => $row['reitti'],
                    'startti' => $row['startti']
                ));
                return $lenkki;
            }
            return null;
        }

}