<?php

/**
 * Default Controller
 *
 * @package    app
 * @author     ksakamoto
 */

class Controller_Default extends Controller
{
	public function action_index()
	{
		return Response::forge(View::forge('default/index'));
	}
}