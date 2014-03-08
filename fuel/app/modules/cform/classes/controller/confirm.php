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
	public static $params = array (
		'from' => 'test1@sample.com', // todo: array('test1@sample.com' => 'test'),
		'to' => '',
		'cc' => 'test2@sample.com',
		'subject' => 'お問い合わせ内容',
		'body' => '',
	);
	
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
			if ( ! $user->save())
			{
				\Session::set_flash('error', 'Could not save article.');
			}
		}
		
//		static::$params['to'] = array(\Input::post('email') => \Input::post('name'));
//		static::$params['body'] = \Input::post('memo');
//		
//		$result = Mail_Sender::forge(static::$params)->send();
//		if ( ! $result)
//		{
//			\Debug::dump('メール送信に失敗しました。');exit;
//		}
		
		\Response::redirect('complete');
	}
}