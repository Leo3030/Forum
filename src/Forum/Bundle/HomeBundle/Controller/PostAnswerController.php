<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forum\Bundle\HomeBundle\Entity\Answer;

class PostAnswerController extends Controller
{
    public function indexAction($id)
    {	
    	$content = $this->get('request')->request->get('content');
    	$uId = $this->get('request')->cookies->get('u_id');
    	$this->create_new_answer($id, $uId, $content);

	 	$question = $this->get_question_by_id($id);
    	$qid = $question->getId();
    	$arr_answer = $this->get_answers_by_qid($qid);


        return $this->render('ForumHomeBundle:Question:question.html.twig', array(
        	'question' => $question,
        	'arr_answers' => $arr_answer 
        	));
    }

    public function create_new_answer($qid, $uid, $content)
    {
    	$answer = new Answer();
        $answer->setContent($content);
        $answer->setQId($qid);
        $answer->setUId($uid);
        $answer->setCreateTime(new \DateTime('now'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($answer);
        $em->flush();

        return true;
    }

    public function get_question_by_id($id)
    {
		$repository = $this->getDoctrine()->getRepository('ForumHomeBundle:Question');
        $question = $repository->find($id);

        if (empty($question)) {
        	return flase;
        } else {
        	return $question;
        }
    }

    public function get_answers_by_qid($qid)
    {
    	$repository = $this->getDoctrine()->getRepository('ForumHomeBundle:Answer');
        $answer = $repository->findBy(array('qId' => $qid));

        if (empty($answer)) {
        	return false;
        } else {
        	return $answer;
        }
    }
}