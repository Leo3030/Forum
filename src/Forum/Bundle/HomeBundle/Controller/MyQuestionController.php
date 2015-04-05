<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forum\Bundle\HomeBundle\Entity\Question;

class MyQuestionController extends Controller
{
    public function indexAction()
    {	
    	$user_id = $this->get('request')->cookies->get('u_id');
    	$arr_questions = $this->get_questions_by_user_id($user_id);

        return $this->render('ForumHomeBundle:MyQuestion:myquestion.html.twig', 
        	array('arr_questions' => $arr_questions));
    }

    public function get_questions_by_user_id($u_id) 
    {
    	$arr_questions = $this->getDoctrine()->getRepository('ForumHomeBundle:Question')->findBy(
    		array('uId' => $u_id)
		);
		if (isset($arr_questions)) {
			return $arr_questions;
		} else {
			return $arr_questions = "";
		}
    }
}