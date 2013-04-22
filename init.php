<?php

defined('SYSPATH') or die('No direct access');

Route::set('error', 'error/<action>(/<description>)', array(
    'action' => '[0-9]++', 'message' => '.+'
))->defaults(array(
    'controller' => 'error'
));
?>
