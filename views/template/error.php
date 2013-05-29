<?php defined('SYSPATH') or die('No direct access'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo __($title) ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" value="<?php echo __($author) ?>"/>
        <meta name="description" value="<?php echo __($description) ?>"/>
        <meta name="keywords" value="<?php echo implode(', ', $keywords) ?>"/>
    </head>
    <body>
        <?php echo $content ?>
    </body>
</html>
