<?php

  $routes->get('/', function() {
    HelloWorldController::etusivu();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

    $routes->get('/etusivu', function() {
    HelloWorldController::etusivu();
  });
    $routes->get('/lenkki_lista', function() {
    LenkkiController::tapahtumaLista();
  });

    $routes->post('/lenkki', function() {
    LenkkiController::store();
  });

    $routes->get('/lenkki_uusi', function() {
    LenkkiController::lenkkiUusi();
  });
  
    $routes->get('/tapahtuma_lista_muokkaus', function() {
    LenkkiController::tapahtumaListaMuokkaus();
  });  
  
    $routes->get('/lenkki_tapahtuma_uusi/:id', function($id) {
    LenkkiController::lenkkiTapahtumaUusi($id);
  });  
  
    $routes->get('/tapahtuma_muokkaa/:id/edit', function($id) {
    LenkkiController::edit($id);
  });    
  
      $routes->post('/lenkki_esittely/:id/destroy', function($id) {
    LenkkiController::destroy($id);
  });    
  
    $routes->post('/lenkki_esittely/:id/edit', function($id) {
    LenkkiController::update($id);
  });    
  
    $routes->get('/lenkki_esittely/:id', function($id) {
    LenkkiController::tapahtuma($id);
  });

    $routes->get('/lenkki_muokkaus', function() {
    LenkkiController::lenkkiLista();
  });    

    $routes->get('/register', function() {
    HelloWorldController::register();
  });

      $routes->get('/login', function() {
    HelloWorldController::login();
  });        

      $routes->get('/lenkki_kanta', function() {
    HelloWorldController::lenkki_kanta();
  });    

      $routes->get('/lenkki_lahto', function() {
    HelloWorldController::lenkki_lahto();
  });    
  
      $routes->get('/admin', function() {
    HelloWorldController::admin();
  });
  
      $routes->get('/juoksijalista', function() {
    JuoksijaController::juoksijalista();
  });  

    $routes->get('/omasivu/:id', function($id) {
    JuoksijaController::juoksija($id);
  });  
  
    $routes->post('/juoksija', function() {
    JuoksijaController::store();
  });  
  
      $routes->get('/omasivu/:id/edit', function($id) {
    JuoksijaController::edit($id);
  });  
  
      $routes->post('/omasivu/:id/edit', function($id) {
    JuoksijaController::update($id);
  });  
  
      $routes->post('/omasivu/:id/destroy', function($id) {
    JuoksijaController::destroy($id);
  });  
  
  