<?php

namespace Gyouth\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$array = array(
			'title' => 'Titel');
        return $this->render('GyouthHomeBundle:Default:index.html.twig', $array);
    }
}
