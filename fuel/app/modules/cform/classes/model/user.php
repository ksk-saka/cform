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