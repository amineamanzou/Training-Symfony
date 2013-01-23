<?php

namespace Training\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Training\ArticleBundle\Entity\Article;
use Training\ArticleBundle\Form\ArticleType;
use Symfony\Component\HttpFoundation\Response;

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
        
        
        $article = new Article();
        
        /* Ancienne entré en dure
        $a->setTitre("Ceci est le titre")
                ->setDescription("Ceci est le contenue de l'article")
                ->setUrl("http://leblogduweb.fr/wp-content/uploads/2012/02/symfony_logo.png")
                ->setDate(new \DateTime());
        
        //Doctrine l'enregistre dans la mémoire
        $em->persist($a);
        //Insert dans la base de donnée
        $em->flush();
        */
        
        // Va créer le form mais avec le contenu de $a
        $form = $this->createForm(new ArticleType(), $article);
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST'))
        {
            /* va aller rehercher dans la requête toute les infos qui pourrait
             * le concerner et il va remplir directement la classe Article
             */
            $form->bindRequest($request);
            
            if ($form->isValid()){
                $article = $form->getData();
                $em->persist($article);
                $em->flush();
            
                return $this->redirect(
                        $this->generateUrl("training_article_affiche", array(
                            'id'    => $article->getId(),
                        ))
                );
            }
            
        }
        
        
        return $this->render('TrainingArticleBundle:Default:ajouter.html.twig', array(
            'id'   => $article->getId(),
            'form' => $form->createView(),
        ));
    }
    
    public function afficherAction(Article $article){
        
        /* Autre methode avec Response
        $em = $this->getDoctrine()->getEntityManager();
        
        // findOneById génere du contenue bidon donc non utilisable avec Exception
        // findByQuelqueChose crée une fonction dynamique donc retourne Array
        // ==> Donc besoin de findOne
        try{
            $article = $em->getRepository("TrainingArticleBundle:Article")->findOne($id);
        } catch(\Exception $e) {
            return new Response("L'article n'existe pas !", 404);
        }
        */
        
        //Methode avec un message 404 de symfony qu'on pourra personnaliser
        return $this->render('TrainingArticleBundle:Default:afficher.html.twig', array(
            'article' => $article,
        ));
    }
    
    public function editerAction(Article $article)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        // Va créer le form mais avec le contenu de $animal
        $form = $this->createForm(new ArticleType(), $article);
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST'))
        {
            /* va aller rehercher dans la requête toute les infos qui pourrait
             * le concerner et il va remplir directement la classe Article
             */
            $form->bindRequest($request);
            
            if ($form->isValid()){
                $a = $form->getData();
                $em->persist($a);
                $em->flush();
            
                return $this->redirect(
                        $this->generateUrl("training_article_afficher", array(
                            'id'    => $a->getId(),
                        ))
                );
            }
            
        }
        
        
        return $this->render('TrainingArticleBundle:Default:editer.html.twig', array(
            'id'        => $article->getId(),
            'form'      => $form->createView(),
        ));
    }
}
