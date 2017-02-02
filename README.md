# Tietokantasovelluksen esittelysivu

Yleisiä linkkejä:

* [Lenkkikerho](http://mlyra.users.cs.helsinki.fi/lenkkikerho/)
* [Etusivu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/etusivu)

Lenkkitapahtumien listausnäkymä (täältä voi valita myös kohteen):
* [Lenkkitapahtumien katselu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_lista)

Tietyn lenkkitapahtumakohteen esittelynäkymä:
* [Lenkkitapahtuman katselu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_esittely)

Uusi admin puoli, josta päästään lenkkitapahtuman lisäykseen sekä asiakastietoihin:
* [Admin](http://mlyra.users.cs.helsinki.fi/lenkkikerho/admin)

Lenkkitapahtumien luonti, osa 1 (Tässä osassa valitaan tapahtumalle lenkki. Toistaiseksi käytettävänä on vain valmiita lenkkiaihioita. Uusien lenkkiaihioiden luontia ei ole vielä toteutettu):
* [Valitse lenkkitapahtumalle lenkki](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_uusi)

Lenkkitapahtuman luonti, osa 2 (Tässä osassa täytetään lenkkitapahtuman muut tiedot ( Päivämäärä, aika ja tapahtumakohtaiset lisätiedot). Tähän osaan ei ole valmista linkkiä, sillä se vaatii toimiakseen jonkin lenkkiaihion id:n. Tähän osaan saavutaan automaattisesti edellisen linkin kautta.

Juoksijoiden listaukseen kuljetaan admin sivun kautta:
* [Juoksijoiden listaus](http://mlyra.users.cs.helsinki.fi/lenkkikerho/juoksijalista)

Yksittäisen juoksijan tietoja katsellaan juoksijan omalta sivulta. Koska sovelluksessa ei ole vielä kirjautumista, voi yksittäisen juoksijan tietoja katsella valitsemalla edellisen sivun juoksijalistalta kohteen painamalla ketsele -nappia.

Juoksijan lisäys on toteutettu rekisteröitymisen kautta:
* [Rekisteröitymissivu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/register)


Muita sivupohjia (kesken):
* [Lenkkitapahtumien ja muokkaus](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_muokkaus)
* [Lenkkitietojen lisäys ja päivitys](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_kanta)
* [Omien tietojen katselu ja muokkaus](http://mlyra.users.cs.helsinki.fi/lenkkikerho/omasivu)
* [Rekisteröityminen](http://mlyra.users.cs.helsinki.fi/lenkkikerho/register)
* [Kirjautuminen](http://mlyra.users.cs.helsinki.fi/lenkkikerho/login)



* [Lenkkikerho -dokumentaatio](https://github.com/HenkkaL/Tsoha-Bootstrap/blob/master/doc/dokumentaatio.pdf)

## Työn aihe

Tarkoitukseni on toteuttaa eräälle lenkkikerholle pieni sovellus, jonka avulla kerholaiset voivat selailla kerhon järjestämiä yhteislenkkejä sekä ilmoittautua niihin osallistujiksi. Kerholaiset saavat palvelun käyttöönsä rekisteröitymällä palveluun.

Sovelluksen ylläpitäjä on kerhon sihteeri, joka päivittää tiedot tulevista lenkeistä. Osallistujien ilmoittautumisen lisäksi, sovellus tarjoaa oivan paikan ylläpitää lenkkeihin liittyvää sellaisista lenkeistä joita kerholla on tapana juosta. Lenkkejä voi kuvailla pituuden, mäkisyyden ja haastavuuden perusteella. Lisäksi lenkkireittien kuvailu ja kokoontumispaikat on syytä tiedottaa.

