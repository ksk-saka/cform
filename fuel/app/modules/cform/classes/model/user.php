<?php

/**
 * User Model
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

class Model_User extends Model_Base
{
	protected static $_has_many = array('forms' => array(
		'model_to' => '\Cform\Model_Form',
		'key_from' => 'id',
		'key_to' => 'user_id',
		'cascade_save' => true,
		'cascade_delete' => true,
	));
	
	public static function validate()
    {
		$val = \Validation::forge();
		$val->add_field('name', '名前', 'trim|required|max_length[50]');
		$val->add_field('email', 'メールアドレス', 'trim|required|max_length[100]|valid_email');
		$val->add_field('memo', '内容', 'trim|required|max_length[65535]');
		return $val;
	}	
	
	public static function users(array $options = array())
	{
		$users = self::find('all', $options);
		if ($users)
		{
			return $users;
		}
		return array(self::forge());
	}
}