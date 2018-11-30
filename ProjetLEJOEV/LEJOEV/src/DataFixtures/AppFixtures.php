<?php

namespace App\DataFixtures;
use App\Entity\Utilisateurs;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new Utilisateurs();

        $user->setNom("Vadillo");
        $user->setPrenom("Matthieu");
        $user->setAge(21);
        $user->setMental(74);
        $user->setSavoir(20);
        $user->setPhysique(67);
        $user->setSociabilite(80);
        $user->setComportement(35);
        $user->setMoyenne(55);
        $manager->persist($user);
        
        $manager->flush();
    }
}
