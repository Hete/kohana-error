<?php

defined('SYSPATH') or die('No direct access');


Route::set('error', 'error/<action>(/<description>)', array(
    'action' => '[0-9]++', 'description' => '.+'
))->defaults(array(
    'controller' => 'error'
));

// Redefine error handler
set_exception_handler(array("Error_Exception", "handler"));
?>
