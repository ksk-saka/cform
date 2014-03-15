<?php

/**
 * Mail Sender
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

class Mail_Sender
{
	private static $mail = null;

	public static function forge(array $params = array())
	{
		return new static($params);
	}
	
	public function __construct($params)
	{
		static::$mail = \Email::forge();
		$this->set($params);
	}
	
	private static $defaults = array (
		'from' => 'no_relpy@sample.com',
		'to' => 'shimax.no083@gmail.com',
		'cc' => '',
		'bcc' => '',
		'subject' => 'お問い合わせ内容',
		'body' => '',
	);
	
	public function set(array $params = array())
	{	
		$params = array_merge(static::$defaults, $params);
		foreach ($params as $key => $value)
		{
			if (method_exists(static::$mail, $key) and ! empty($value))
			{
				static::$mail->{$key}($value);
			}
		}
	}
	
	public static function send()
	{
		try
		{
			static::$mail->send();
		}
		catch(\EmailValidationFailedException $e)
		{
			return false;
		}
		catch(\EmailSendingFailedException $e)
		{
			return false;
		}
		
		return true;
	}
}