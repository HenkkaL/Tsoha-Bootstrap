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
    HelloWorldController::lenkki_lista();
  });

    $routes->get('/lenkki_esittely', function() {
    HelloWorldController::lenkki_esittely();
  });

    $routes->get('/lenkki_muokkaus', function() {
    HelloWorldController::lenkki_muokkaus();
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