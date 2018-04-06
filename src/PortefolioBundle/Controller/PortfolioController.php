<?php

namespace PortefolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PortefolioBundle\Entity\Projet;
use PortefolioBundle\Entity\Image;
use PortefolioBundle\Entity\Referent;

class PortfolioController extends Controller
{
    public function indexAction()
    {
        //on récup tout les projets
        $projetRepository = $this->getDoctrine()->getManager()->getRepository('PortefolioBundle:Projet');
        $listProjet = $projetRepository->findAll();

        return $this->render("PortefolioBundle:Portfolio:index.html.twig", array('lesProjet'=>$listProjet) );
    }

    public function  afficherUnProjetAction($id)
    {
        $ProjetRepository = $this->getDoctrine()->getManager()->getRepository("PortefolioBundle:Projet");
        $leProjet =  $ProjetRepository->find($id);
        $otherProjects =  $this->getDoctrine()->getRepository("PortefolioBundle:Projet")->lesAutresProjets($id);

        return $this->render("PortefolioBundle:Portfolio:consulter.html.twig", array('leProjet'=>$leProjet,'lesAutresProjets'=>$otherProjects));
    }

    public function afficherCvAction()
    {
        return $this->render('@Portefolio/Portfolio/consulterCv.html.twig');
    }
}
