<?php

namespace home\adminBundle\Controller;

use home\AccueilBundle\Entity\videos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     * @Template()
     */
    public function indexAction()
    {
        return array('ResultInsertVideo' => "toto");
    }

    /**
     * @Route("/decoAdmin")
     * @Template()
     */
    public function decoAdminAction()
    {
        // Passage de paramètres à ma vue index.html.twig
        return $this->render("loginBundle:Default:index.html.twig", array());
    }

    /**
     * @Route("/adminUser")
     * @Template()
     */
    public function adminUserAction()
    {
        $resultInsertVideo = null;
        $Videorepository = null;
        $resultVideo = null;

        if(isset($_POST["urlVideo"]));
        {
            $video = new videos();
            $video->setUrl($_POST["urlVideo"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();

            $resultInsertVideo = 'Vous avez ajouté une vidéo';

            $Videorepository = $this->getDoctrine()
                ->getRepository('AccueilBundle:videos');

            $gbVideo = $Videorepository->createQueryBuilder('u');

            $resultVideo = $gbVideo->getQuery()->getResult();

        }

        return array('isConnected' => "Bonjour", "videos" => $resultVideo, 'ResultInsertVideo' => $resultInsertVideo);
    }

    /**
     * @Route("/DeleteVideo")
     * @Template()
     */
    public function DeleteVideoAction()
    {
        if(isset($_POST["DeleteVideo"]));
        {
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('AccueilBundle:videos')->find($_POST["idVideo"]);

            $em->remove($product);
            $em->flush();

            $resultInsertVideo = 'Vous avez supprimé une vidéo';

            $Videorepository = $this->getDoctrine()
                ->getRepository('AccueilBundle:videos');

            $gbVideo = $Videorepository->createQueryBuilder('u');

            $resultVideo = $gbVideo->getQuery()->getResult();

        }

        // Passage de paramètres à ma vue index.html.twig
        return $this->render("adminBundle:Default:adminUser.html.twig", array('isConnected' => "Bonjour", "videos" => $resultVideo, 'ResultInsertVideo' => $resultInsertVideo));
    }

}
