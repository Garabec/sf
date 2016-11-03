<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;

class ArticleController extends Controller
{
    
    
    
   /**
     * @Route("/articles", name="article_list")
     */
    public function indexAction()
    {
        return $this->render('article/index.html.twig') ;
        
        
        
       // return new Response(' <html><body> article list </body></html>');
        
    }
    
    /**
     * @Route("/articles/{id}{sl}", name="article_page", requirements={"id":"[1-9][0-9]*","sl":"/?"})
     */
    public function showAction($id)
    {
        
        return $this->render('article/show.html.twig',['id_var'=>$id]) ;
        
        //return new Response(" <html><body> article: {$id} </body></html>");
        
    }
    
    /**
     * @Route("/articles-test", name="article_test")
     * @Template()
     */
    public function testAction()
    {
        $article= new Article();
        
        $article->setTitle('Symfony start')->setContetnt('Same text bla bla');
        
        return ['article'=>$article] ;
        
        
        
      
        
    }
    
    
    
}
