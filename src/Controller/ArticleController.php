<?php
/**
 * Created by PhpStorm.
 * User: dendude
 * Date: 25/01/2018
 * Time: 22:23
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My page already done!');
    }
    
    /**
     * @Route("/news/{slug}")
     *
     * @param $slug
     * @return Response
     */
    public function news($slug)
    {
        return new Response(
            sprintf('Future page to show one space article - %s', $slug)
        );
    }
}