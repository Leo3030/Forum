<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forum\Bundle\HomeBundle\Entity\Answer;
use Forum\Bundle\HomeBundle\Entity\Question;

class AnswerQuestionController extends Controller
{
    public function indexAction()
    {
    	$user_id = $this->get('request')->cookies->get('u_id');
    	$arr_questions = $this->get_questions_by_user_id($user_id);

	    return $this->render('ForumHomeBundle:AnswerQuestion:answerquestion.html.twig', array(
	    	'arr_questions' => $arr_questions
	    	));
    }

    public function get_questions_by_user_id($u_id) 
    {
    	$arr_answer = $this->getDoctrine()->getRepository('ForumHomeBundle:Answer')->findBy(
    		array('uId' => $u_id)
		);
		if (!empty($arr_answer)) {
			foreach ($arr_answer as $key => $dbo) {
				$qId = $dbo->getQId();
				$arr_questions[$key] = $this->getDoctrine()->getRepository('ForumHomeBundle:Question')
				->findBy(array('id' => $qId));		
			}
			if (!empty($arr_questions)) {
				return $arr_questions;
			} else {
				return $arr_questions = "";
			}
		} else {
			return $arr_questions = "";
		}
    }
}
