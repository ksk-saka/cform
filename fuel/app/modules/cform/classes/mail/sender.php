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
	
	public function __construct(array $params = array())
	{
		static::$mail = \Email::forge();
		$this->set($params);
	}
	
	private static $list = array (
		'from',
		'to',
		'cc',
		'bcc',
		'subject',
		'body',
	);
	
	public function set(array $params = array())
	{	
		foreach ($params as $key => $value)
		{
			if (in_array($key, static::$list))
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