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
class Kohana_Controller_Error extends Controller_Template {

    /**
     *
     * @var View
     */
    public $template = 'template/error';

    public function before() {

        parent::before();

        // Custom title
        $this->template->title = 'error.' . (int) $this->request->action() . '.title';

        // Default message is based on error status
        $this->template->description = 'error.' . (int) $this->request->action() . '.message';

        // Take description from param if available
        if ($description = rawurldecode($this->request->param('description'))) {
            $this->template->description = $description;
        }

        $this->response->status((int) $this->request->action());
    }

    /**
     * Not authorized
     * 
     * You have to authenticate to access this resource.
     */
    public function action_401() {
        
    }

    /**
     * Forbidden
     * 
     * Authentication will not change anything.
     */
    public function action_403() {
        
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
