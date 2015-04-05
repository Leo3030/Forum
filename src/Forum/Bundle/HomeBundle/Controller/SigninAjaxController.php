<?php

namespace Forum\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Forum\Bundle\HomeBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class SigninAjaxController extends Controller
{
	public function indexAction()
    {
        $name = $this->get('request')->request->get('name');
        $email = $this->get('request')->request->get('email');
        $phone = $this->get('request')->request->get('phone');
        $password = $this->get('request')->request->get('password');
        
        $ret = $this->check_username($name);
        if ($ret) {
            $this->create_new_user($name, $email, $phone, $password);
            $this->get_user_by_name($name);
        }


        return $this->render('ForumHomeBundle:Home:home.html.twig');    
    }

    public function check_username($name)
    {
        $repository = $this->getDoctrine()->getRepository('ForumHomeBundle:User');
        $user = $repository->findOneByName($name);
        if (isset($user)) {
            return false;
        } else {
            return true;
        }
    }

    public function create_new_user($name, $email, $phone, $password)
    {
        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPhone($phone);
        $user->setPassword($password);
        $user->setPermission(User::EUM_GUEST_PERMISSION);
        $user->setCreateTime(new \DateTime('now'));
        $user->setUpdateTime(new \DateTime('now'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($user);
        $em->flush();

        return true;
    }

    public function get_user_by_name($name)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ForumHomeBundle:User')->findOneByName($name);
        $u_id = $user->getId();
        
        setcookie('u_id', $u_id);
        
        return true;
    }
}
