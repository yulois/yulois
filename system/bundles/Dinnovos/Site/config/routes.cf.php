<?php
/*
 * This file is part of the System Bundles EventoSalud.
 *
 * (c) Jorge Gaitan <webmaster@dinnovos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Routing\Route;

$routes->add(
    'contact',
    new Route('/contactenos', array('controller' => 'Dinnovos\Site:Contact:show'))
);

$routes->add(
	'pages',
	new Route('/pagina/{slug}', array('controller' => 'Dinnovos\Site:Pages:show'))
);