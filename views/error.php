<?php defined('SYSPATH') or die('No direct access'); ?>

<h2><?php echo __($title) ?></h2>

<p><?php echo __($description) ?></p>

<h3>Vous pouvez toujours essayer les options suivantes</h3>

<div class="control-group">
    <?php echo Bootstrap::button("Retourner sur l'accueil", NULL, "") ?>
    <?php echo Bootstrap::button("Retourner ou vous étiez", NULL, Request::initial()->uri(), "warning") ?>
</div>


