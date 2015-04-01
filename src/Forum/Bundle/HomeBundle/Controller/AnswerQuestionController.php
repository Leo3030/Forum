<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnswerQuestionController extends Controller
{
    public function indexAction()
    {
        return $this->render('ForumHomeBundle:AnswerQuestion:AnswerQuestion.html.twig');
    }
}
