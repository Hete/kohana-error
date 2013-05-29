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
class Kohana_Controller_Template_Error extends Controller_Template {

    public $template = 'template/error';

    /**
     * Metas
     * 
     * @var variant 
     */
    protected $author,
            $title,
            $description,
            $keywords = array();

    /**
     * 
     * @var View
     */
    protected $content = 'error';

    public function before() {

        parent::before();

        $this->content = View::factory($this->content);

        // Custom title
        $this->title = 'error.' . (int) $this->request->action() . '.title';

        // Default message is based on error status
        $this->description = 'error.' . (int) $this->request->action() . '.message';

        // Take description from param if availab.e
        if ($description = rawurldecode($this->request->param('description'))) {
            $this->description = $description;
        }

        $this->response->status((int) $this->request->action());
    }

    public function after() {

        View::set_global('author', $this->author);
        View::set_global('title', $this->title);
        View::set_global('description', $this->description);
        View::set_global('keywords', $this->keywords);

        $this->template->content = $this->content;

        parent::after();
    }

}

?>
