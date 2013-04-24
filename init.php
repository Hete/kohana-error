<?php

defined('SYSPATH') or die('No direct access');

set_error_handler(array("Error_Exception", "handler"));

Route::set('error', 'error/<action>(/<description>)', array(
    'action' => '[0-9]++', 'description' => '.+'
))->defaults(array(
    'controller' => 'error'
));
?>
