<?php

class User extends BaseModel {
/*Luokassa juoksijan autentikointi. */
    public static function authenticate() {
        $query = DB::connection()->prepare('SELECT * FROM Juoksija WHERE knimi = :knimi AND salasana = :salasana LIMIT 1');
        $query->execute(array('knimi' => $knimi, 'salasana' => $salasana));
        $row = $query->fetch();
        if ($row) {
            $juoksija = new Juoksija(array(
                'id' => $row['id'],
                'knimi' => $row['knimi'],
                'etunimi' => $row['etunimi'],
                'sukunimi' => $row['sukunimi'],
                'sposti' => $row['sposti']
            ));
            return $juoksija;
        }
        return NULL;
    }

}
