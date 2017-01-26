INSERT INTO Startti (nimi, osoite, kuvaus) Values ('Pitkäkosken ulkoilumaja', 'Pitkäkoskenkaari 5', 'Punainen hökkeli jossa hyviä munkkeja, joten varaathan pikkurahaa');
INSERT INTO Startti (nimi, osoite, kuvaus) Values ('Paloheinän ulkoilumaja', 'Paloheinäntie 8 5', 'Lenkkivaatteet voi vaihtaa pukusuojassa viisi. Myös suihkutilat käytössä');
INSERT INTO Startti (nimi, osoite, kuvaus) Values ('Pirkkolan urheilupuisto', 'Pirkkolan tie 1', 'Lähtö uimahallin edustalta. Uimahallin pukutilat ilmaiseksi käytössä, kun ilmoittaa kuuluvansa lenkkikerhoon.');
INSERT INTO Startti (nimi, osoite, kuvaus) Values ('Silvolan maauimala', 'Silvolan taival 19', 'Pukusuoja käytössä. Mahdollisuus avantouintiin (talvella)');


INSERT INTO Lenkki (nimi, matka, reitti, startti) Values ('Pitkäkosken raaka', '7.4', 'Pitkäkosken raaka juostaan keskuspuiston ytimessä. Pikäkosken pururata tarjoaa lenkille mäkiset puiteet.', '1');
INSERT INTO Lenkki (nimi, matka, reitti, startti) Values ('Pitkäkosken kymppi', '9.7', 'Pitkäkosken kymppi juostaan keskuspuiston ytimessä. Matka suuntaa aluksi......', '1');
INSERT INTO Lenkki (nimi, matka, reitti, startti) Values ('Silvolan pikkukieppi', '2.5', 'Silvolan ympäristössä pikkulenkki jossa pärjää perheen pienimmätkin.', '4');
INSERT INTO Lenkki (nimi, matka, reitti, startti) Values ('Paloheinän pitkä', '24', 'Paloheinästä lähdetään pohjoiseen pitkäkosken suuntaan....', '2');

INSERT INTO Tapahtuma (pvm, aika, kuvaus, Lenkki) Values ('2016-12-15', '04:00', 'Yölenkki vuoden pimeimpään aikaan','2');
INSERT INTO Tapahtuma (pvm, aika, kuvaus, Lenkki) Values ('2016-01-23', '14:00', 'Ohjaaja vetää ylimääräiset vauhtiharjoitukset halukkaille', '2');
INSERT INTO Tapahtuma (pvm, aika, kuvaus, Lenkki) Values ('2017-06-01', '08:30', 'Lenkin päätteeksi on perinteisesti poikettu paikalliseen pitseriaan.', '3');
INSERT INTO Tapahtuma (pvm, aika, kuvaus, Lenkki) Values ('2017-07-01', '14:15', 'Lenkki juostaan hitaana', '4');
INSERT INTO Tapahtuma (pvm, aika, kuvaus, Lenkki) Values ('2017-06-06', '15:00', 'Lenkillä vauhtileikittelyä', '1');

INSERT INTO Juoksija (knimi, etunimi, sukunimi, sposti, salasana) Values ('Salama', 'Hannu', 'konstikas', 'hannu@gmail.com', 'salama123');
INSERT INTO Juoksija (knimi, etunimi, sukunimi, sposti, salasana) Values ('Jänis', 'Eetu', 'Esimerkki', 'eetu.eetu@gmail.com', 'jänis123');
INSERT INTO Juoksija (knimi, etunimi, sukunimi, sposti, salasana) Values ('Jaksu', 'Janne', 'Juoksija', 'janne.juoksija@gmail.com', 'jaksu123');
INSERT INTO Juoksija (knimi, etunimi, sukunimi, sposti, salasana) Values ('Urakka', 'Paavo', 'Pinkoja', 'paav0@gmail.com', 'urakka123');
INSERT INTO Juoksija (knimi, etunimi, sukunimi, sposti, salasana) Values ('Puhki', 'Kiri', 'Keisari', 'hannu@gmail.com', 'puhki123');

INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('1', '1');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('1', '4');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('2', '5');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('3', '1');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('4', '2');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('5', '2');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('2', '3');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('2', '5');
INSERT INTO Osallistuja(juoksija, tapahtuma) Values ('5', '4');