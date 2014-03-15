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
		$this->template->title = '確認';
		$this->template->content = \View::forge('confirm');
	}
	
	public function post_send()
	{
		$users = Model_User::users(array(
			'where' => array(
				array('email', \Input::post('email')),
			),
			'related' => array(
				'forms',
			),
		));
		
		foreach ($users as $user)
		{
			$user->name = \Input::post('name');
			$user->email = \Input::post('email');
			$user->forms[] = Model_Form::forge(array('memo' => \Input::post('memo')));
			
			$params = array('body' => \Input::post('name')."\r\n".\Input::post('memo'));
			$mail = Mail_Sender::forge($params);
			if ( ! $user->save() or  ! $mail->send())
			{
				\Session::set_flash('error', 'メール送信に失敗しました。');
			}
		}
		
		\Response::redirect('complete');
	}
}