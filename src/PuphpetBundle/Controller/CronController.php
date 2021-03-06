<?php

namespace PuphpetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CronController extends Controller
{
    public function indexAction(array $data)
    {
        return $this->render('PuphpetBundle:cron:form.html.twig', [
            'cron' => $data,
        ]);
    }

    public function jobAction()
    {
        return $this->render('PuphpetBundle:cron/sections:job.html.twig', [
            'job' => $this->getData()['empty_job'],
        ]);
    }

    /**
     * @return array
     */
    private function getData()
    {
        $manager = $this->get('puphpet.extension.manager');
        return $manager->getExtensionAvailableData('cron');
    }
}
