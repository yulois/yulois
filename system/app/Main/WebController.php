<?php
/**
 * This file is part of the Yulois Framework.
 *
 * (c) Jorge Gaitan <info.yulois@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Main;

use Yulois\Controller;

class WebController extends Controller
{
    protected $_POST = array();
    protected $_GET = array();
    protected $isAjax = false;
    protected $_emailMaster = 'mail@midominio.com';
    protected $_emailNoReply = 'noreply@midominio.com';

	public function preAction()
	{
		$Request = $this->getRequest();
		$User = $this->getUser();
		$View = $this->getView();

        $this->_POST = $Request->request->all();
        $this->_GET = $Request->query->all();

        // Identifica si la peticion es ajax;
        $this->isAjax = $Request->isXmlHttpRequest();

        $View->set(array(

        ));
	}

	public function postAction()
	{

	}
}