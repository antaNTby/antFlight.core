<?php

// If you're using Composer, require the autoloader.
require '../vendor/autoload.php';
// if you're not using Composer, load the framework directly
// require 'flight/Flight.php';

// Then define a route and assign a function to handle the request.
Flight::route('/', function () {
  echo 'hello ADMIN!';
});

// Finally, start the framework.
Flight::start();