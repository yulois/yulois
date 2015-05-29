<?php
/**
 * This file is part of the Yulois Framework.
 *
 * (c) Jorge Gaitan <info.yulois@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Routing\Route;

$routes->add(
	'homepage',
	new Route('/', array( 'controller' => 'Dinnovos\Site:Welcome:index' ))
);

$routes->add(
    'default',
    new Route(
        '/q/{bundle}/{controller}/{action}/{param1}/{param2}/{param3}/{param4}/{param5}',
        array(
            '_bundle' => array(
                'pages' => 'Dinnovos\Site'
            ),
            'param1' => null,
            'param2' => null,
            'param3' => null,
            'param4' => null,
            'param5' => null)
    )
);