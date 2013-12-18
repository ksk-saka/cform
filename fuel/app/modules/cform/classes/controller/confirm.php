<?php

/**
 * Confirm Controller
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

class Controller_Confirm extends Controller_Base
{
	public function post_index()
	{	
		$data['input'] = \Input::post();
		
		$this->template->title = '確認';
		$this->template->content = \View::forge('confirm', $data);
	}
}