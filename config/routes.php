<?php

    function check_logged_in(){
        BaseController::check_logged_in();
    }
    
    function check_admin(){
        UserController::check_admin();
    }

  $routes->get('/', function() {
    HelloWorldController::etusivu();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

    $routes->get('/etusivu', function() {
    HelloWorldController::etusivu();
  });
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

    $routes->get('/register', function() {
    HelloWorldController::register();
  });

      $routes->get('/lenkki_kanta', 'check_logged_in', function() {
    HelloWorldController::lenkki_kanta();
  });    

      $routes->get('/lenkki_lahto', 'check_logged_in', function() {
    HelloWorldController::lenkki_lahto();
  });    
  
      $routes->get('/admin', 'check_admin', function() {
    HelloWorldController::admin();
  });
  
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
  
  $routes->get('/login', function(){
      UserController::login();
  });
  
  $routes->post('/login', function(){
      UserController::handle_login();
  });  
  
  $routes->post('/logout', function(){
      UserController::logout();
  });
  
  
  
  