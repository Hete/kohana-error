<?php

defined('SYSPATH') or die('No direct access');

/**
 * Handles HTTP exceptions in production environment.
 *
 * @package   Error
 * @category  Controllers
 * @author    Hète.ca Team
 * @copyright (c) 2013, Hète.ca Inc.
 */
class Kohana_Controller_Error extends Controller_Template {

    /**
     * Override this template on need.
     * 
     * @var View
     */
    public $template = 'template/error';

    public function after() {

        // Custom title
        $this->template->code = $this->request->action();

        // Default message is based on error status
        $this->template->message = $this->request->query('message');

        $this->response->status((int) $this->request->action());

        parent::after();
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
