<?php defined('SYSPATH') or die('No direct access'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo __($title) ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" value="<?php echo __($description) ?>"/>
    </head>
    <body>
        <h2><?php echo __($title) ?></h2>
        <p><?php echo __($description) ?></p>
        <h3><?php echo __('error.whattodo') ?></h3>
        <ul>
            <li><?php echo HTML::anchor('', __('error.gohome')) ?></li>
            <li><?php echo HTML::anchor(Request::initial()->uri(), __('error.startover')) ?></li>
        </ul>
    </body>
</html>
