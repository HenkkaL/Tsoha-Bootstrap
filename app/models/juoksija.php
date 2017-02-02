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
        
        public function save(){
            $query = DB::connection()->prepare('INSERT INTO Juoksija (etunimi, sukunimi, sposti, knimi, salasana) VALUES (:etunimi, :sukunimi, :sposti, :knimi, :salasana) RETURNING id');
            $query->execute(array('etunimi' => $this->etunimi, 'sukunimi' => $this->sukunimi, 'sposti' => $this->sposti, 'knimi' => $this->knimi, 'salasana' => $this->salasana));
            $row = $query->fetch();
            $this->id = $row['id'];            
        }                

}
