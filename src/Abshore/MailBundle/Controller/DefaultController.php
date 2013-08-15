<?php

namespace Abshore\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction($name) {
        
        $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('benahmed8houcine@gmail.com')
                ->setTo(array('benahmed8houcine@gmail.com'))
                ->setBody(
                $this->renderView(
                        'AbshoreMailBundle:Default:email.html.twig', array('name' => $name)
                )
                )
        ;
        $this->get('mailer')->send($message);

        return $this->render('AbshoreMailBundle:Default:index.html.twig', array('name' => $name));
    }

}
