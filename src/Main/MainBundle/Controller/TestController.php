<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Description;
use Main\MainBundle\Form\description\OriginesAdminType;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\MediaAdminType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    public function multiformAction(Request $request)
    {
        $formTypeA = new DescriptionAdminType();
        $formTypeB = new DescriptionAdminType();
        $form1 = $this->get('form.factory')->createNamedBuilder($formTypeA, 'form1name')
            ->add('foo', 'text')
            ->getForm();

        $form2 = $this->get('form.factory')->createNamedBuilder($formTypeB, 'form2name')
            ->add('bar', 'text')
            ->getForm();

        if('POST' === $request->getMethod()) {

            if ($request->request->has('form1name')) {
                // handle the first form
            }

            if ($request->request->has('form2name')) {
                // handle the second form
            }
    }

        return array(
            'form1' => $form1->createView(),
            'form2' => $form2->createView()
        );
    }
}
