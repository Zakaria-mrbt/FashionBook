<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Post>
 *
 * @method Post|null find($id, $lockMode = null, $lockVersion = null)
 * @method Post|null findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    public function add(Post $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Post $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Post[] Returns an array of Post objects
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

//    public function findOneBySomeField($value): ?Post
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


public function findByallPublication() {
    
   
    return $this->createQueryBuilder('publicationpost')
    ->select('post.id, post.content, post_comment.content')
    ->from('App\Entity\Post', 'post')
    ->from('App\Entity\PostComment', 'post_comment')
    
    ->where('post.id = 7 ') 
    ->setMaxResults(15)
    // ->andWhere('post.id = post_comment.id')
    
    
    // ->setParameter('p','Post')
    ->getQuery()
    ->getResult()
;


    // return $this->createQueryBuilder('Post')
        // ->select('*')
        // ->from('App\Entity\Post', 'post')
        // ->join('App\Entity\Profil', 'profil')
        // ->join('App\Entity\PostLike', 'post_like')
        // ->join('App\Entity\PostComment', 'post_comment')
        // ->join('App\Entity\PostCommentLike', 'post_comment_like')
        // ->where('post.id = 6') 
        // ->setMaxResults(15)
        
        // ->getQuery()
        // ->getResult()
        
    ;

    // return $this->createQuery(
    //     'SELECT * FROM post , post_comment WHERE '
    //  )   
    //     ->getQuery()
    //     ->getResult()
    //     ;



}
}
