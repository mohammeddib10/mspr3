<?php

namespace App\Repository;

use App\Entity\Employer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EmployerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employer::class);
    }


    public function UpdateSalariesEmployes(float $salaire,int $entreprise)
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            UPDATE employer 
            SET salary = salary +  :salaire
            WHERE entreprise = :entreprise
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['salaire' => $salaire,'entreprise' => $entreprise]);
    }


}





