<?php

/**
 * Confirm Controller
 *
 * @package    app
 * @author	   ksakamoto
 */

class Controller_Confirm extends Controller
{
	public function action_index()
	{
		echo Request::forge('cform/confirm')->execute();
	}
}