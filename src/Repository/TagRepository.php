<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Tag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tag::class);
    }

    public function add(Tag $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if (!$flush) {
            return;
        }

        $this->_em->flush();
    }

    public function remove(Tag $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if (!$flush) {
            return;
        }

        $this->_em->flush();
    }
}
