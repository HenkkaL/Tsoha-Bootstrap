# Tietokantasovelluksen esittelysivu

Yleisiä linkkejä:

* [Lenkkikerho](http://mlyra.users.cs.helsinki.fi/lenkkikerho/)
* [Etusivu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/etusivu)

Lenkkitapahtumien listausnäkymä (täältä voi valita myös kohteen):
* [Lenkkitapahtumien katselu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_lista)

Uusi admin puoli, josta päästään lenkkitapahtuman lisäykseen sekä asiakastietoihin:
* [Admin](http://mlyra.users.cs.helsinki.fi/lenkkikerho/admin)

Lenkkitapahtumien luonti, osa 1 (Tässä osassa valitaan tapahtumalle lenkki. Toistaiseksi käytettävänä on vain valmiita lenkkiaihioita. Uusien lenkkiaihioiden luontia ei ole vielä toteutettu):
* [Valitse lenkkitapahtumalle lenkki](http://mlyra.users.cs.helsinki.fi/lenkkikerho/lenkki_uusi)

Lenkkitapahtuman luonti, osa 2 (Tässä osassa täytetään lenkkitapahtuman muut tiedot ( Päivämäärä, aika ja tapahtumakohtaiset lisätiedot). Tähän osaan ei ole valmista linkkiä, sillä se vaatii toimiakseen jonkin lenkkiaihion id:n. Tähän osaan saavutaan automaattisesti edellisen linkin kautta.

Juoksijoiden listaukseen kuljetaan admin sivun kautta:
* [Juoksijoiden listaus](http://mlyra.users.cs.helsinki.fi/lenkkikerho/juoksijalista)

VIIKKO 4:

Juoksijan lisäys on toteutettu rekisteröitymisen kautta:
* [Rekisteröitymissivu](http://mlyra.users.cs.helsinki.fi/lenkkikerho/register)

Kirjautuminen (käyttäjätunnus: testikäyttäjä, salasana: testikäyttäjä). Toiminta ohjataan luokan UserController kautta.
* [Kirjautuminen](http://mlyra.users.cs.helsinki.fi/lenkkikerho/login)

Viikon neljä CRUD kohdistuu luokkaan Juoksija. Lisäys rekisteröitymällä käyttäjäksi. Muokkaus ja poisto kirjautuneelle käyttäjälle omien tietojen kautta. Juoksija -luokassa toteutettu save, update, destroy sekä validaattorit. Toimintoja ohjataan luokan JuoksijaController kautta.

* [Lenkkikerho -dokumentaatio](https://github.com/HenkkaL/Tsoha-Bootstrap/blob/master/doc/dokumentaatio.pdf)

## Työn aihe

Tarkoitukseni on toteuttaa eräälle lenkkikerholle pieni sovellus, jonka avulla kerholaiset voivat selailla kerhon järjestämiä yhteislenkkejä sekä ilmoittautua niihin osallistujiksi. Kerholaiset saavat palvelun käyttöönsä rekisteröitymällä palveluun.

Sovelluksen ylläpitäjä on kerhon sihteeri, joka päivittää tiedot tulevista lenkeistä. Osallistujien ilmoittautumisen lisäksi, sovellus tarjoaa oivan paikan ylläpitää lenkkeihin liittyvää sellaisista lenkeistä joita kerholla on tapana juosta. Lenkkejä voi kuvailla pituuden, mäkisyyden ja haastavuuden perusteella. Lisäksi lenkkireittien kuvailu ja kokoontumispaikat on syytä tiedottaa.

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons Licence" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Lenkkikerho</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
