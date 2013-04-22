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
    protected $content = "error";

    /**
     *
     * @var string 
     */
    private $message;

    public function before() {

        parent::before();

        $this->content = View::factory($this->content);

        // Custom title
        $this->title = 'error.' . (int) $this->request->action() . '.title';

        // Default message is based on error status
        $this->message = 'error.' . (int) $this->request->action() . '.message';

        if ($message = rawurldecode($this->request->param('message'))) {
            $this->message = $message;
        }

        $this->response->status((int) $this->request->action());
    }

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
     * 
     * Un mail est envoyé aux administrateurs de SaveInTeam.
     */
    public function action_503() {
    }

    /**
     * Internal Server Error.
     * 
     * Un mail est envoyé aux administrateurs de SaveInTeam.
     */
    public function action_500() {
    }

    public function after() {
        $this->template->content = $this->content;
        $this->content->title = $this->title;
        $this->content->message = $this->message;
        parent::after();
    }

}

?>
