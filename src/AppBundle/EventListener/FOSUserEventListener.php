<?php
namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Doctrine\ORM\EntityManager;


class FOSUserEventListener{
    protected $em;
    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function onRegistrationCompleted(FilterUserResponseEvent $event){
        $user = $event->getUser();
        $user->addRole("ROLE_USER");
        $request = $event->getRequest();

        $this->em->persist($user);

        $this->em->flush();
        return $event; 
    }
}
