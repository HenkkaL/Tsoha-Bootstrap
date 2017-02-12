-- Lisää CREATE TABLE lauseet tähän tiedostoon
CREATE TABLE Juoksija(
id SERIAL PRIMARY KEY,
knimi varchar(50) NOT NULL, 
etunimi varchar(50) NOT NULL,
sukunimi varchar(50) NOT NULL,
sposti varchar(100) NOT NULL,
salasana varchar(50) NOT NULL
);

CREATE TABLE Startti(
id SERIAL PRIMARY KEY,
nimi varchar(100) NOT NULL,
osoite varchar(120),
kuvaus varchar(300)
);

CREATE TABLE Lenkki(
id SERIAL PRIMARY KEY,
nimi varchar(120) NOT NULL,
matka decimal(5, 2),
reitti varchar(1000),
startti INTEGER REFERENCES Startti(id)
);

CREATE TABLE Tapahtuma(
id SERIAL PRIMARY KEY,
pvm DATE,
aika TIME,
lenkki INTEGER REFERENCES Lenkki(id),
kuvaus varchar(1000)
);

CREATE TABLE Osallistuja(
juoksija INTEGER REFERENCES Juoksija(id) ON DELETE CASCADE,
tapahtuma INTEGER REFERENCES Tapahtuma(id) ON DELETE CASCADE
);
