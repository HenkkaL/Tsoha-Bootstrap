<?php
class Juoksija extends BaseModel{
	public $id, $knimi, $etunimi, $sukunimi, $sposti, $salasana;
	public function __construct($attributes){
		parent::__construct($attributes);
                $this->validators = array('validate_etunimi', 'validate_sukunimi', 'validate_knimi', 'validate_sposti', 'validate_salasana');
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
        
        public function update(){
            $query = DB::connection()->prepare('UPDATE Juoksija SET etunimi=:etunimi, sukunimi=:sukunimi, sposti=:sposti, knimi=:knimi, salasana=:salasana WHERE id=:id' );
            $query->execute(array('etunimi' => $this->etunimi, 'sukunimi' => $this->sukunimi, 'sposti' => $this->sposti, 'knimi' => $this->knimi, 'salasana' => $this->salasana, 'id' => $this->id));
            $row = $query->fetch();              
        }  
        
        public function destroy(){
            $query = DB::connection()->prepare('DELETE FROM Juoksija WHERE id=:id' );
            $query->execute(array('id' => $this->id));
            $row = $query->fetch();                       
        }
        
        public function validate_etunimi(){
            $errors = array();
            if ($this->etunimi == '' || $this->etunimi == null){
                $errors[] = 'Etunimi on pakollinen kenttä';                        
            }
            if (strlen($this->etunimi) < 3){
                $errors[] = 'Etunimessä pitää olla ainakin kolme kirjainta';    
            }
            return $errors;
        }
        
        public function validate_sukunimi(){
            $errors = array();
            if ($this->sukunimi == '' || $this->sukunimi == null){
                $errors[] = 'Sukunimi on pakollinen kenttä';                        
            }
            if (strlen($this->sukunimi) < 3){
                $errors[] = 'Sukunimessä pitää olla ainakin kolme kirjainta';
            }
            return $errors;
        }
        
        public function validate_knimi(){
            $errors = array();
            if ($this->knimi == '' || $this->knimi == null){
                $errors[] = 'Käyttäjänimi on pakollinen kenttä';                        
            }
            if (strlen($this->knimi) < 3){
                $errors[] = 'käyttäjänimessä pitää olla ainakin kolme kirjainta';
            }
            return $errors;
        }
        
        public function validate_sposti(){
            $errors = array();
            if ($this->sposti == '' || $this->sposti == null){
                $errors[] = 'Sähköpostiosoite on pakollinen kenttä';                        
            }
            if (strlen($this->sposti) < 8){
                $errors[] = 'sähköpostiosoitteessa pitää olla ainakin kahdeksan kirjainta';
            }
            return $errors;
        }        

        public function validate_salasana(){
            $errors = array();
            if ($this->salasana == '' || $this->salasana == null){
                $errors[] = 'Salasana on pakollinen kenttä';                        
            }
            if (strlen($this->salasana) < 8){
                $errors[] = 'Salasanassa pitää olla ainakin kahdeksan kirjainta';
            }
            return $errors;
        }        
        

}
