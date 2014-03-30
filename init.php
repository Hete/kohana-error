<?php

defined('SYSPATH') or die('No direct access');

Route::set('error', 'error/<action>', array(
    'action' => '[0-9]++',
))->defaults(array(
    'controller' => 'Error'
));
