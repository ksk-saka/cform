<?php

/**
 * Input Controller
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

class Controller_Input extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = '入力';
		$this->template->content = \View::forge('input');
	}
}