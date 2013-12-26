<?php

/**
 * Confirm Controller
 *
 * @package    app
 * @author	   ksakamoto
 */

class Controller_Confirm extends Controller
{
	public function post_index()
	{
		echo Request::forge('cform/confirm')->execute();
	}
	
	public function post_send()
	{
		echo Request::forge('cform/confirm/send')->execute();
	}
}