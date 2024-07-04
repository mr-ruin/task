<?php

require __DIR__ . '/vendor/autoload.php';

use App\FormHandler;

// Instantiate the handler and process the form
$formHandler = new FormHandler();
echo $formHandler->handle();