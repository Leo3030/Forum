<?php
namespace Forum\Bundle\HomeBundle\Dao;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Question {
	private function __construct() {
	}

	public static function &get_instance() {
		if (!(self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	private static $instance;

    public function get_questions() {
        $arr_questions = $this->getDoctrine()
                ->getRepository('ForumHomeBundle:Question')
                ->findAll();

        return $arr_questions;
    }
}