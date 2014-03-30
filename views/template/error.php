<?php defined('SYSPATH') or die('No direct access'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $exception->getCode() ?> - Page not found</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" value="<?php echo $exception->getMessage() ?>"/>
    </head>
    <body>
        <h2><?php echo $exception->getCode() ?> - Page not found</h2>
        <p><?php echo $exception->getMessage() ?></p>
    </body>
</html>
