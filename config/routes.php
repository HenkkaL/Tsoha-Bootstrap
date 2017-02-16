<?php

function check_logged_in() {
    BaseController::check_logged_in();
}

function check_admin() {
    UserController::check_admin();
}

//KaatoluokkaController

$routes->get('/', function() {
    KaatoluokkaController::etusivu();
});

$routes->get('/hiekkalaatikko', function() {
    KaatoluokkaController::sandbox();
});

$routes->get('/etusivu', function() {
    KaatoluokkaController::etusivu();
});

$routes->get('/register', function() {
    KaatoluokkaController::register();
});

$routes->get('/admin', 'check_admin', function() {
    KaatoluokkaController::admin();
});

//UserController

$routes->get('/login', function() {
    UserController::login();
});

$routes->post('/login', function() {
    UserController::handle_login();
});

$routes->post('/logout', function() {
    UserController::logout();
});

//JuoksijaController

$routes->get('/juoksijalista', 'check_admin', function() {
    JuoksijaController::juoksijalista();
});

$routes->get('/omasivu/:id', 'check_logged_in', function($id) {
    JuoksijaController::juoksija($id);
});

$routes->post('/lenkki_esittely/:id/osallistu', 'check_logged_in', function($id) {
    JuoksijaController::osallistu($id);
});

$routes->post('/omasivu/:id/peruOsallistuminen', 'check_logged_in', function($id) {
    JuoksijaController::peruOsallistuminen($id);
});

$routes->post('/juoksija', function() {
    JuoksijaController::store();
});

$routes->get('/omasivu/:id/edit', 'check_logged_in', function($id) {
    JuoksijaController::edit($id);
});

$routes->post('/omasivu/:id/edit', 'check_logged_in', function($id) {
    JuoksijaController::update($id);
});

$routes->post('/omasivu/:id/destroy', 'check_logged_in', function($id) {
    JuoksijaController::destroy($id);
});


//LenkkiController  

$routes->get('/lenkki_lista', 'check_logged_in', function() {
    LenkkiController::tapahtumaLista();
});

$routes->post('/lenkki', 'check_logged_in', function() {
    LenkkiController::store();
});

$routes->get('/lenkki_uusi', 'check_admin', function() {
    LenkkiController::lenkkiUusi();
});

$routes->get('/tapahtuma_lista_muokkaus', 'check_admin', function() {
    LenkkiController::tapahtumaListaMuokkaus();
});

$routes->get('/lenkki_tapahtuma_uusi/:id', 'check_admin', function($id) {
    LenkkiController::lenkkiTapahtumaUusi($id);
});

$routes->get('/tapahtuma_muokkaa/:id/edit', 'check_admin', function($id) {
    LenkkiController::edit($id);
});

$routes->post('/lenkki_esittely/:id/destroy', 'check_admin', function($id) {
    LenkkiController::destroy($id);
});

$routes->post('/lenkki_esittely/:id/edit', 'check_admin', function($id) {
    LenkkiController::update($id);
});

$routes->get('/lenkki_esittely/:id', 'check_logged_in', function($id) {
    LenkkiController::tapahtuma($id);
});

$routes->get('/lenkki_muokkaus', 'check_admin', function() {
    LenkkiController::lenkkiLista();
});






