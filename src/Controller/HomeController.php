<?php

namespace App\Controller;


use App\Repository\PostCommentRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(\App\Repository\PostRepository $postRepository,
                          \App\Repository\PostCommentRepository $postCommentRepository,
                          \App\Repository\ProfilRepository $profilRepository,
                          \App\Repository\PostLikeRepository $postLikeRepository,
                          \App\Repository\PostCommentRepository $postCommentLikeRepository,
                          ): Response
    {
        
        $test = $postLikeRepository ;
        $test = $postLikeRepository->findAll();
        
        

        return $this->render('home/index.html.twig', [
            'posts' => $postRepository->findAll(),
            // 'user' => $profilRepository->findByUserProfil(),
            'comments' => $postCommentRepository->findAll(),
            'profil' => $profilRepository->findAll(),
            'postlikes' => $postLikeRepository->findAll(),
            'postcommentlikes' => $postCommentLikeRepository->findAll(),


        ]);
       
    }
}
