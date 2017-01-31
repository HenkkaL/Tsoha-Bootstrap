<?php

  $routes->get('/', function() {
    HelloWorldController::index();
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

    $routes->get('/lenkki_esittely/:id', function($id) {
    LenkkiController::tapahtuma($id);
  });


    $routes->get('/lenkki_muokkaus', function() {
    LenkkiController::lenkkiLista();
  });    

    $routes->get('/omasivu', function() {
    HelloWorldController::omasivu();
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