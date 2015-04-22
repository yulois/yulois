<?php
/**
 * This file is part of the Yulois Framework.
 *
 * (c) Jorge Gaitan <info.yulois@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
	'authentication'		=> false,

	'safe_routes'			=> array(
		'rule' => 'registro',

		'parts' => array( 'module' => 'cliente', 'action' => 'registro')
	),

	'allowed_credentials'	=> array('user'),
	
	'model' => array(
		'namespace' => 'Db\Model\Ys_Cliente',
		'field_user' => 'email',
		'field_pass' => 'password',
		'save_fields_session' => array('id', 'usuario', 'nombre', 'apellido', 'email', 'carpeta')
	),

	/* # 86400sg es equivalentes a un dia */
	'token_expire_time'		=> 86400,
	
	/* # 3600sg es equivalentes a una hora */
	'max_inactive_time'		=> 1800
);