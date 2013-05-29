<?php

defined('SYSPATH') or die('No direct access');

/**
 * Contrôlleur pour gérer les exceptions en mode de production.
 *
 * @package Error
 * @category Controllers
 * @author Hète.ca Team
 * @copyright (c) 2013, Hète.ca Inc.
 */
class Kohana_Controller_Error extends Controller_Template_Error {

    /**
     * Not authorized
     */
    public function action_401() {
        
    }

    /**
     * Not Found.
     */
    public function action_404() {
        
    }

    /**
     * Service Unavailable.
     */
    public function action_503() {
        
    }

    /**
     * Internal Server Error.
     */
    public function action_500() {
        
    }

}

?>
