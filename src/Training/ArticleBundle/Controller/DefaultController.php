<?php

namespace Training\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Training\ArticleBundle\Entity\Article;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $articles = $em->getRepository("TrainingArticleBundle:Article")->findAll();
        /* findAll permet de récuperer tout ce qui se trouve dans cette table
         * $articles est une array collection : objet doctrine optimisé pour les 
         * grosse quantité de donnée
         */
        
        
        return $this->render('TrainingArticleBundle:Default:index.html.twig', array(
            'articles' => $articles
        ));
    }
    
    public function ajouterAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $a = new Article();
        $a->setTitre("Ceci est le titre")
                ->setDescription("Ceci est le contenue de l'article")
                ->setUrl("http://leblogduweb.fr/wp-content/uploads/2012/02/symfony_logo.png")
                ->setDate(new \DateTime());
        
        //Doctrine l'enregistre dans la mémoire
        $em->persist($a);
        //Insert dans la base de donnée
        $em->flush();
        
        return $this->render('TrainingArticleBundle:Default:ajouter.html.twig', array(
        
        ));
    }
}
