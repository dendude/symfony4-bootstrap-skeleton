<?php
/**
 * Created by PhpStorm.
 * User: dendude
 * Date: 25/01/2018
 * Time: 22:23
 */

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }
    
//    /**
//     * @Route("/news/{slug}", name="article_show")
//     *
//     * @param $slug
//     * @return Response
//     */
//    public function show($slug)
//    {
//        $comments = [
//            'I ate a normal rock once. It did NOT taste like bacon!',
//            'Woohoo! I\'m going on an all-asteroid diet!',
//            'I like bacon too! Buy some from my site! bakinsomebacon.com',
//        ];
//
//        return $this->render('article/show.html.twig', [
//            'title' => ucwords(str_replace('-', ' ', $slug)),
//            'slug' => $slug,
//            'comments' => $comments,
//        ]);
//    }
//
//    /**
//     * @Route("news/{slug}/heart", name="toggle_article_heart", methods={"POST"})
//     */
//    public function toggleArticleHeart($slug, LoggerInterface $logger)
//    {
//        $logger->info('Article is being hearted');
//
//        return $this->json(['hearts' => rand(5, 100)]);
//    }
}