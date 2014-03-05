<?php

namespace Ant\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ant\WebBundle\Entity\Portfolio;


/**
 * Portfolio controller.
 *
 */
class PortfolioController extends Controller
{

    /**
     * Lists all Portfolio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AntWebBundle:Portfolio')->findAll();

        return $this->render('AntWebBundle:Portfolio:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Portfolio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AntWebBundle:Portfolio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Portfolio entity.');
        }


        return $this->render('AntWebBundle:Portfolio:show.html.twig', array(
            'entity'      => $entity,

        ));
    }


}
