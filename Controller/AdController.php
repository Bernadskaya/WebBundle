<?php

namespace Ant\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ant\WebBundle\Entity\Ad;
use Ant\WebBundle\Entity\AdGroup;


/**
 * Ad controller.
 *
 */
class AdController extends Controller
{


    /**
     * Lists all Ad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AntWebBundle:Ad')->findAll();




        return $this->render('AntWebBundle:Ad:index.html.twig', array('entities' => $entities,));
    }

    /**
     * Show list ads in group
     *
     */
    public function listOneGroupAction($id, $adGroupTemplate)
    {
        $em = $this->getDoctrine()->getManager();
        $ad = $em->getRepository('AntWebBundle:Ad')->findByAdGroup($id);

        $adGroup = $this->getDoctrine()
            ->getRepository('AntWebBundle:AdGroup')
            ->find($id);
        $adGroupTitle = $adGroup->getTitle();

        return $this->render($adGroupTemplate, array(
            'ad'=>$ad,
            'adGroupTitle'=>$adGroupTitle,
        ));
    }


    /**
     * Finds and displays a Ad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AntWebBundle:Ad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ad entity.');
        }

        return $this->render('AntWebBundle:Ad:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
