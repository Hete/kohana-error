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
class Controller_Error extends Controller_General {

    public $template = "layout/template/enregistrement";
    protected $content = "error";
    private $message;

    public function before() {

        parent::before();
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

        // Redirection vers la connexion si l'utilisateur est déconnecté
        if (!Auth::instance()->logged_in()) {
            Notifications::instance()->notifications($this->message, NULL, "warning");
            Request::initial()->redirect("auth/login");
        }
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
        Mail_Sender::instance()->send(ORM::factory("user")->where_has_role("admin")->find_all(), "mail/error", array("message" => $this->message));
    }

    /**
     * Internal Server Error.
     * 
     * Un mail est envoyé aux administrateurs de SaveInTeam.
     */
    public function action_500() {
        Mail_Sender::instance()->send(ORM::factory("user")->where_has_role("admin")->find_all(), "mail/error", array("message" => $this->message));
    }

    public function after() {
        $this->content->title = $this->title;
        $this->content->message = $this->message;

        parent::after();
    }

}

?>
