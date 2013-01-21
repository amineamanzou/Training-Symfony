<?php

namespace Training\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrainingArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
