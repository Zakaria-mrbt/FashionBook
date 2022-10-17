<?php

namespace App\Repository;

use App\Entity\PostComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PostComment>
 *
 * @method PostComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method PostComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method PostComment[]    findAll()
 * @method PostComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostCommentRepository extends ServiceEntityRepository
{

    public function findAll()
    {
        return $this->findBy(
            array(),
            array('createdAt' => 'ASC'),
            
            
            
    );
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PostComment::class);
    }

    public function add(PostComment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PostComment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PostComment[] Returns an array of PostComment objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PostComment
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }



// public function findByPostCommentByPostId($Post , $PostComment)
//    {

//     //         $query = $this->_em->createQuery(
//     //             'SELECT * FROM App\Entity\Post , App\Entity\PostComment WHERE Postt = :post_comment.id_post_id ORDER BY ASC'
//     //         )
            
//     //        ;
//     //          return $query->execute();
            
// //                return $this->createQueryBuilder( 'Post' , 'PostComment')
// //            ->andWhere('Post = PostComment')
// //            ->setParameters(['post.id'=>$Post, 'post_comment.id_post_id' =>$PostComment])
// //         //    ->setParameter(  'post.id', $Postt)
// //         //    ->setParameter(  'post_comment.id_post_id', $PostCommentt)
// //            ->getQuery()
// //            ->getResult()
// //        ;
// //    }

// $query = $postCommentRepository->createQuery(
//     SELECT * 
//      FROM App\Entity\PostComment 
//      LEFT JOIN App\Entity\Post   
//      WHERE post.id = '1' 
// );

// $result= $query->execute();




// public function findByPostCommentByPostId() {
    
   
    

//     return $this->createQueryBuilder('postcomment')
//         // ->select('*')
//         ->from('App\Entity\PostComment', 'post_comment')
//         ->join('App\Entity\Post', 'post')
//         ->where('postcomment.idPost = post.id') 
//         ->setMaxResults(5)
//         // ->andWhere('post.id = post.id')
        
        
//         // ->setParameter('p','Post')
//         ->getQuery()
//         ->getResult()
//     ;

    // return $this->createQuery(
    //     'SELECT * FROM post , post_comment WHERE '
    //  )   
    //     ->getQuery()
    //     ->getResult()
//     //     ;
// }


    public function findByAllPublicationComment(): array
    {
        return $this->createQueryBuilder('comment')
            
            
            ->orderBy('comment.createdAt', 'ASC')       
            ->setMaxResults(200)
            ->getQuery()
            ->getResult()
        ;
    }
}

