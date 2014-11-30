<?php

defined('SYSPATH') OR die('No direct access');

/**
 * Overrides HTTP_Exception to handle custom error page.
 *
 * @package Error
 * @author  Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 * @license BSD-3-Clauses
 */
class HTTP_Exception extends Kohana_HTTP_Exception {

	public function get_response()
	{
		if ( ! Kohana::$errors)
		{
			$uri = Route::get('error')->uri(array('action' => $this->getCode()));

			return Request::factory($uri)
				->query('exception', serialize($this))
				->execute()
				->status($this->getCode());
		}

		return parent::get_response();
	}

}
