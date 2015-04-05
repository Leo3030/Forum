<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use \Forum\Bundle\HomeBundle\Dao\Question;

class ListController extends Controller
{
    public function indexAction()
    {
        //setcookie("u_id", 1);
        //var_dump($User);

        //$arr_questions = Question::get_instance()->get_questions();
        $arr_questions = $this->get_questions();

        return $this->render('ForumHomeBundle:List:list.html.twig', array(
            'arr_questions' => $arr_questions
    	));
    }

    public function get_questions() {
        $arr_questions = $this->getDoctrine()
                ->getRepository('ForumHomeBundle:Question')
                ->findAll();

        return $arr_questions;
    }
}
