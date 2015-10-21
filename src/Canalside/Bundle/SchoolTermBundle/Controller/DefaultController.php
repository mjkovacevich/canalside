<?php
// src/Canalside/Bundle/SchoolTermBundle/Controller/DefaultController.php

namespace Canalside\Bundle\SchoolTermBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Canalside\Bundle\SchoolTermBundle\Entity\SchoolTerm;
use Canalside\Bundle\SchoolTermBundle\Form\Type\SchoolTermType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('CanalsideSchoolTermBundle:SchoolTerm');
        $schoolTerms = $repository->findAll();
        return $this->render('CanalsideSchoolTermBundle:Default:index.html.twig', array('schoolTerms' => $schoolTerms));
    }

    public function createAction(Request $request)
    {
        // REQUEST_TIME seems to be in UTC.
        $requestTime = date('Y-m-d H:i:s', $request->server->get('REQUEST_TIME', time()));
        $ip = $this->container->get('request_stack')->getCurrentRequest()->getClientIp();

        // Create a default school term.
        $schoolTerm = new SchoolTerm();
        $schoolTerm->setLabel('2015 Term 1');
        $schoolTerm->setCountryCode('GB');
        $schoolTerm->setRegion('Oxfordshire');
        $schoolTerm->setYear(2015);
        $schoolTerm->setTerm(1);
        $schoolTerm->setStart(new \DateTime('2014-09-01'));
        $schoolTerm->setFinish(new \DateTime('2014-10-24'));
        $schoolTerm->setDays(40);
        $schoolTerm->setCreatedBy(1);
        $schoolTerm->setCreatedOn(new \DateTime($requestTime));
        $schoolTerm->setCreatedIp($ip);
        $schoolTerm->setUpdatedBy(1);
        $schoolTerm->setUpdatedOn(new \DateTime($requestTime));
        $schoolTerm->setUpdatedIp($ip);
        $schoolTerm->setActive(1);

        // Create the form.
        $form = $this->createForm('canalside_school_term', $schoolTerm);

        $form->handleRequest($request);

        // Create the school term.
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($schoolTerm);
            $em->flush();
            return new Response('Created new school term with id '.$schoolTerm->getSchoolTermId());
        }
        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}