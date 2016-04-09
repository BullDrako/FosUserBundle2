<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 3/12/15
 * Time: 19:45
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /**
     * @Route(
     *     path="/email",
     *     name="app_index_index"
     * )
     */
    public function indexAction()
    {
        /*$user_manager = $this->get('fos_user.user_manager');
        $users = $user_manager->findUsers();
        var_dump($users);die;*/
        $m = $this->getDoctrine()->getManager();
        $userRepository = $m->getRepository('UserBundle:User');
        //var_dump($userRepository->myFindOneByUsernameOrEmail('edcafi07@@gmail.com'));die;
        return $this->render(':default/index:index.html.twig');
    }


    /**
     * @Route(
     *          path="/send-email",
     *          name="app_index_sendEmail"
     * )
     */
    public function sendEmailAction()
    {
        $message = \Swift_Message::newInstance()
                ->setSubject('asd')
                ->setFrom('pruebassymfonytest@gmail.com')
                -setTo('edcafi07@gmail.com')
                ->setBody('test');

        $mailer = $this->get('mailer');
        $mailer->send($message);

        return $this->render(':default/index:email.html.twig');
    }
}