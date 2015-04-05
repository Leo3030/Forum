<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forum\Bundle\HomeBundle\Entity\Question;
use Symfony\Component\HttpFoundation\Response;
/*use Symfony\Component\Validator\Constraints\DateTime;*/

class AskQuestionAjaxController extends Controller
{
	public function indexAction()
    {
        $question = $this->get('request')->request->get('question');
        $u_id = $this->get('request')->cookies->get('u_id');
        $this->insert_question_table($question, $u_id);

    	$arr_questions = $this->get_questions();

        return $this->redirectToRoute('forum_list_listpage');
    }

    public function get_questions() 
    {
        $arr_questions = $this->getDoctrine()
                ->getRepository('ForumHomeBundle:Question')
                ->findAll();

        return $arr_questions;
    }

    public function insert_question_table($question, $u_id) 
    {
    	$dboQuestion = new Question();
    	$dboQuestion->setContent($question);
    	$date = new \DateTime('now');
    	$dboQuestion->setCreateTime($date);
        $dboQuestion->setUId($u_id);
    	$em = $this->getDoctrine()->getManager();

    	$em->persist($dboQuestion);
    	$em->flush();

		return true;
    }
}
