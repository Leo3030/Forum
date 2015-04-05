<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AskQuestionController extends Controller
{
    public function indexAction()
    {
        return $this->render('ForumHomeBundle:AskQuestion:askquestion.html.twig');
    }
}
