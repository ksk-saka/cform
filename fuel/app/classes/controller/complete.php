<?php

/**
 * Complete Controller
 *
 * @package    app
 * @author     ksakamoto
 */

class Controller_Complete extends Controller
{
	public function action_index()
	{
		echo Request::forge('cform/complete')->execute();
	}
}