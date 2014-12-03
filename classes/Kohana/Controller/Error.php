<?php defined('SYSPATH') OR die('No direct access');

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

	/**
	 * Error that occured.
	 *
	 * @var \HTTP_Exception
	 */
	public $exception;

	public function before()
	{
		parent::before();

		$this->exception = unserialize($this->request->query('exception'));
	}

	/**
	 * Not authorized
	 *
	 * You have to authenticate to access this resource.
	 */
	public function action_401()
	{

	}

	/**
	 * Forbidden
	 *
	 * Authentication will not change anything.
	 */
	public function action_403()
	{

	}

	/**
	 * Not Found.
	 */
	public function action_404()
	{

	}

	/**
	 * Internal Server Error.
	 */
	public function action_500()
	{

	}

	/**
	 * Service Unavailable.
	 */
	public function action_503()
	{

	}

	public function after()
	{
		$this->template->exception = $this->exception;

		parent::after();
	}

}
