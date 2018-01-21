<?php
/**
 * Created by PhpStorm.
 * User: fhissirou
 * Date: 14/01/18
 * Time: 00:43
 */

namespace AppBundle\Repository;


use InvalidArgumentException;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PredEmpRepository extends EntityRepository
{


   /* public function findAllByStatus($id_status){

        $ministereConcerner = array("Cohesion des territoires", "Ministere de la cohesion des territoires", "Interieur" , "Interieur (Mme la ministre aupres du ministre d'Etat)", "Ministere de l'interieur", "Action et comptes publics" );

        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();

        $qb->select(array('qe', 'm'))
            ->from('AppBundle:Qe', 'qe')
            ->join('qe.afectationMinistere', 'm')
            ->where("m.nom IN (:nomMinisteres)")
            ->andWhere("qe.afectationMinistere = m.idministere")
            ->andWhere("qe.idStatus = :id_status")
            ->setParameter("nomMinisteres", $ministereConcerner)
            ->setParameter("id_status", $id_status);


        $resultat = $qb->getQuery()->getResult();

        return $resultat;
    }*/

}

