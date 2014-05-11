<?php defined('SYSPATH') or die('No direct access'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $exception->getCode() ?> - <?php __('error.' . $exception->getCode() . '.title') ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="<?php echo $exception->getMessage() ?>"/>
    </head>
    <body>
        <h1><?php echo $exception->getCode() ?> - <?php __('error.' . $exception->getCode() . '.title') ?></h1>
        <p><?php echo $exception->getMessage() ?></p>
    </body>
</html>
