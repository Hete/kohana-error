<?php defined('SYSPATH') or die('No direct access'); ?>

<p><?php echo __($message) ?></p>

<h3>Vous pouvez toujours essayer les options suivantes</h3>

<div class="controls">
    <div class="controls-row">
        <div class="control-group">
            <?php echo Bootstrap::button("Retourner sur l'accueil", NULL, "") ?>
        </div>
    </div>
    <div class="controls-row">
        <div class="control-group">
            <?php echo Bootstrap::button("Retourner ou vous étiez", NULL, Request::initial()->uri(), "warning") ?>
        </div>
    </div>    
</div>

