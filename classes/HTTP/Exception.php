<?php

defined('SYSPATH') or die('No direct access');

/**
 * Overrides HTTP_Exception to handle custom error page.
 * 
 * @package Error
 * @author  Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 * @license BSD 3 clauses
 */
class HTTP_Exception extends Kohana_HTTP_Exception {

    public function get_response() {

        if (Kohana::$environment === Kohana::PRODUCTION) {

            $uri = Route::get('error')->uri(array(
                'action' => $this->getCode()
            ));

            return Request::factory($uri)
                            ->query('exception', serialize($this))
                            ->execute();
        }

        return parent::get_response();
    }

}
