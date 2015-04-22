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
            'dbname' 	=> 'dinnovos_evento',
            'user' 		=> 'dinnovos_evento',
            'password' 	=> '8IxBuSiI2CVT',
            'driver' 	=> 'pdo_mysql',
            'charset '	=> 'utf8'
		),
	),
	
	'dev' => array(
		'default' => array(
			'host' 		=> 'localhost',
			'dbname' 	=> 'ds_dinnovos',
			'user' 		=> 'homestead',
			'password' 	=> 'secret',
			'driver' 	=> 'pdo_mysql',
			'charset '	=> 'utf8'
		),
	),
);