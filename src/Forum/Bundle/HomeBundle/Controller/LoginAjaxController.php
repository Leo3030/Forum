<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forum\Bundle\HomeBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class LoginAjaxController extends Controller
{
	public function indexAction()
    {
        $name = $this->get('request')->request->get('name');
        $password = $this->get('request')->request->get('password');

        $user = $this->check_username_password($name, $password);

        if($user) {
            $u_id = $user->getId();
            setcookie('u_id', $u_id);
        } else {
            return $this->render('ForumHomeBundle:Login:login.html.twig');                
        }

        return $this->render('ForumHomeBundle:Home:home.html.twig');    
    }

    public function check_username_password($name, $password)
    {
        $repository = $this->getDoctrine()->getRepository('ForumHomeBundle:User');
        $user = $repository->findOneBy(array(
            'name' => $name,
            'password' => $password
            ));
        if (isset($user)) {
            return $user;
        } else {
            return false;
        }
    }
}
