<?php
class Juoksija extends BaseModel{
	public $id, $knimi, $etunimi, $sukunimi, $sposti, $salasana;
	public function _construct($attributes){
		parent::_construct($attributes);
	}
        
        public static function all(){
            $query = DB::connection()->prepare('SELECT * FROM Juoksija');
            $query->execute();
            $rows = $query->fetchAll();
            $juoksijat = array();
            
            foreach($rows as $row){
                $juoksijat[] = new Juoksija(array(
                    'id' => $row['id'],
                    'knimi' => $row['knimi'],
                    'etunimi' => $row['etunimi'],
                    'sukunimi' => $row['sukunimi'],
                    'sposti' => $row['sposti'],
                ));
            }
            return $juoksijat;
        }
        
        public static function find($id){
            $query = DB::connection()->prepare('SELECT * FROM Juoksija WHERE id = :id LIMIT 1');
            $query->execute(array('id' => $id));
            $row = $query->fetch();
            
            if($row){
                $juoksija = new Juoksija(array(
                    'id' => $row['id'],
                    'knimi' => $row['knimi'],
                    'etunimi' => $row['etunimi'],
                    'sukunimi' => $row['sukunimi'],
                    'sposti' => $row['sposti']
                ));
                return $juoksija;
            }
            return null;
        }

}
