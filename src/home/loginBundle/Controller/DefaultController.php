<?php

namespace home\loginBundle\Controller;

use Doctrine\Tests\ORM\Mapping\User;
use home\loginBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/Login")
     * @Template()
     */
    public function indexAction()
    {

        $error = null;
            try
            {


            }catch(\Exception $e){
                $error = "une erreur est survenue:" . $e->getMessage();
            }

        // Passage de paramètres à ma vue index.html.twig
        return array("error" => $error);

    }

    /**
     * @Route("/TestForm")
     * @Template()
     */
    public function testFormAction()
    {

        $error = null;
        $connected = null;
        $test = null;
        $Videorepository = null;
        $resultVideo = null;
        $name = null;
        if(isset($_POST["identifiant"]))
        {
            try
            {
                $repository = $this->getDoctrine()
                    ->getRepository('loginBundle:user');

                $gb = $repository->createQueryBuilder('u');
                $gb->where('u.name = :name')
                    ->andWhere('u.pass = :pass')
                    ->setParameters(array('name' => $_POST["identifiant"], 'pass' => $_POST["mdp"]));

                $result = $gb->getQuery()->getResult();



                if(count($result) > 0)
                {
                    $connected = "Bonjour";

                    $Videorepository = $this->getDoctrine()
                        ->getRepository('AccueilBundle:videos');

                    $gbVideo = $Videorepository->createQueryBuilder('u');

                    $resultVideo = $gbVideo->getQuery()->getResult();
                }
                else
                {
                    $connected = "Erreur de connexion";
                }


            }catch(\Exception $e){
                $error = "une erreur est survenue:" . $e->getMessage();
            }

        }
        // Passage de paramètres à ma vue index.html.twig
        return $this->render("adminBundle:Default:adminUser.html.twig", array("error" => $error, "isConnected" => $connected, "videos" => $resultVideo));
    }
}
