<?php

/**
 * Base Controller
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

abstract class Controller_Base extends \Controller_Template
{
	public function before()
	{
		parent::before();
		
		if ( ! \Request::is_hmvc())
		{
			throw new \HttpNotFoundException;
		}
	}
}