<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SigninController extends Controller
{
    public function indexAction()
    {	
        return $this->render('ForumHomeBundle:Signin:signin.html.twig');
    }
}