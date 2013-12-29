<?php

/**
 * Complete Controller
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

class Controller_Complete extends Controller_Base
{
	public function action_index()
	{
		$this->template->title = '完了';
		$this->template->content = \View::forge('complete');
	}
}