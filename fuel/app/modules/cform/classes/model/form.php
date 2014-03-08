<?php

/**
 * Form Model
 *
 * @package    app
 * @subpackage cform
 * @author     ksakamoto
 */

namespace Cform;

class Model_Form extends Model_Base
{
	protected static $_belongs_to = array('users' => array(
        'model_to' => '\Cform\Model_User',
		'key_from' => 'user_id',
        'key_to' => 'id',
        'cascade_save' => true,
        'cascade_delete' => false,
    ));
}