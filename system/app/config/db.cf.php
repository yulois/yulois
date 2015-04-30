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
	'prod' => array(
		'default' => array(
            'host' 		=> 'localhost',
            'dbname' 	=> 'db_yulois',
            'user' 		=> 'user_yulois',
            'password' 	=> '',
            'driver' 	=> 'pdo_mysql',
            'charset '	=> 'utf8'
		),
	),
	
	'dev' => array(
		'default' => array(
			'host' 		=> 'localhost',
			'dbname' 	=> 'db_yulois',
			'user' 		=> 'user_yulois',
			'password' 	=> '',
			'driver' 	=> 'pdo_mysql',
			'charset '	=> 'utf8'
		),
	),
);