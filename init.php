<?php defined('SYSPATH') or die('No direct access');

Route::set('error', 'error/<action>', array(
    'action' => '[4-5][0-9][0-9]', // accept error codes only
))->defaults(array(
    'controller' => 'Error'
));
