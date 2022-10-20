<?php

namespace App\Controller;


use App\Entity\Post;
use App\Repository\PostCommentRepository;
use App\Repository\PostLikeRepository;
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
                          \App\Repository\PostCommentLikeRepository $PostCommentLikeRepository,
                           ): Response
    {
        

        // $testpost = $postRepository->findByAllPublication();

        // dd($testpost);

        // $testcomment = $postRepository->findByAllPublication();

        // dd($testcomment);
        
        //    $testlike = $PostCommentLikeRepository->findAll();

        // dd($testlike);
        
        

        return $this->render('home/index.html.twig', [
            'posts' => $postRepository->findByAllPublication(),
            // 'user' => $profilRepository->findByUserProfil(),
            'comments' => $postCommentRepository->findByAllPublicationComment(),
            'profil' => $profilRepository->findAll(),
            'postLikes' => $postLikeRepository->findAll(),
            'postCommentsLikes' => $PostCommentLikeRepository->findAll()
            


        ]);
       
    }



}


