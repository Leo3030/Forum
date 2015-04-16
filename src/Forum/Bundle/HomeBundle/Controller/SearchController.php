<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use \Forum\Bundle\HomeBundle\Dao\Question;

class SearchController extends Controller
{
    public function indexAction()
    {
        $words = $this->get('request')->request->get('words');
        $arr_questions = $this->get_questions_by_words($words);

        return $this->render('ForumHomeBundle:List:list.html.twig', array(
            'arr_questions' => $arr_questions
    	));
    }

    public function get_questions_by_words($words) {
        $arr_questions = $this->getDoctrine()
                ->getRepository('ForumHomeBundle:Question')
                ->findBy(
                    array('content' => $words)
                );

        return $arr_questions;
    }
}
