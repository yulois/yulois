<?php

namespace Dinnovos\Site\Controllers;

use Dinnovos\Site\Main\BundleController;

class HomeController extends BundleController
{
    public function indexAction()
    {
        return $this->render('Dinnovos\Site:Home:index', array(
            'menu_inicio'=> true
        ));
	}
}