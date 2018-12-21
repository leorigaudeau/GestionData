<?php

namespace App\DataFixtures;

use App\Entity\Questions;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class InsertQuestion extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Q1=new Questions();
        $Q1->setIntitule('Savez vous planter des choux ?');
        $Q1->setRapportClass('Mental');
        $manager->persist($Q1);
        $Q2=new Questions();
        $Q2->setIntitule('Souriez vous ? Vraiment ?');
        $Q2->setRapportClass('Mental');
        $manager->persist($Q2);
        $Q3=new Questions();
        $Q3->setIntitule('Encaissez vous facilement la critique?');
        $Q3->setRapportClass('Mental');
        $manager->persist($Q3);
        $Q4=new Questions();
        $Q4->setIntitule('Savez vous? Qu\'est ce qu\'un système d\'information?');
        $Q4->setRapportClass('Savoir');
        $manager->persist($Q4);
        $Q5=new Questions();
        $Q5->setIntitule('Savez Vous ? Comment s\'appelle la première liste d\'un script bash ? (#!/bin/bash)');
        $Q5->setRapportClass('Savoir');
        $manager->persist($Q5);
        $Q6=new Questions();
        $Q6->setIntitule('Savez Vous ? Qu\'est ce qu\'un VLAN ?');
        $Q6->setRapportClass('Savoir');
        $manager->persist($Q6);
        $Q7=new Questions();
        $Q7->setIntitule('Faites-vous un sport collectif ou individuel ? ');
        $Q7->setRapportClass('Physique');
        $manager->persist($Q7);
        $Q8=new Questions();
        $Q8->setIntitule('Aimez-vous le sport ?');
        $Q8->setRapportClass('Physique');
        $manager->persist($Q8);
        $Q9=new Questions();
        $Q9->setIntitule('Avez-vous des hobbies ?');
        $Q9->setRapportClass('Physique');
        $manager->persist($Q9);
        $Q10=new Questions();
        $Q10->setIntitule('Connaissez vous vos qualités et vos défauts ?');
        $Q10->setRapportClass('sociabilisation');
        $manager->persist($Q10);
        $Q12=new Questions();
        $Q12->setIntitule('La prise de parole en groupe vous fait-elle peur ?');
        $Q12->setRapportClass('Sociabilisation');
        $manager->persist($Q12);
        $Q11=new Questions();
        $Q11->setIntitule('Seriez vous capable d\'aller parler à un inconnu dans la rue ?');
        $Q11->setRapportClass('Sociabilisation');
        $manager->persist($Q11);
        $Q13=new Questions();
        $Q13->setIntitule('Mangez vous equilibré ?');
        $Q13->setRapportClass('Comportement');
        $manager->persist($Q13);
        $Q14=new Questions();
        $Q14->setIntitule('Dormez-vous assez ?');
        $Q14->setRapportClass('Comportement');
        $manager->persist($Q14);
        $Q15=new Questions();
        $Q15->setIntitule('Aimez vous sortir entre amis, famille, petite amie, passez du temps avec eux ?');
        $Q15->setRapportClass('Comportement');
        $manager->persist($Q15);

        $manager->flush();
    }
}
