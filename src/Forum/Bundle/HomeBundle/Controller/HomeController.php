<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ForumHomeBundle:Home:home.html.twig');
    }
}