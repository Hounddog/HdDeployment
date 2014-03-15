<?php
namespace HD\Deployment;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
        echo "Deploy!"
        exit;
	}
}