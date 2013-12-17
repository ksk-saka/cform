<?php

/**
 * Input Controller
 *
 * @author     ksakamoto
 */

class Controller_Input extends Controller
{
	public function action_index()
	{
		echo Request::forge('cform/input')->execute();
	}
}