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
        $manager->persist($user);



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

        $user->setNom("letembey");
        $user->setPrenom("Christian");
        $user->setAge(20);
        $user->setMental(58);
        $user->setSavoir(35);
        $user->setPhysique(53);
        $user->setSociabilite(73);
        $user->setComportement(55);
        $user->setMoyenne(55);
        $manager->persist($user);

        $user->setNom("Lafrechoux");
        $user->setPrenom("elouane");
        $user->setAge(18);
        $user->setMental(45);
        $user->setSavoir(40);
        $user->setPhysique(70);
        $user->setSociabilite(53);
        $user->setComportement(53);
        $user->setMoyenne(52);
        $manager->persist($user);

        $user->setNom("Cambert");
        $user->setPrenom("Killian");
        $user->setAge(19);
        $user->setMental(35);
        $user->setSavoir(40);
        $user->setPhysique(65);
        $user->setSociabilite(60);
        $user->setComportement(50);
        $user->setMoyenne(50);
        $manager->persist($user);

        $user->setNom("Suchot");
        $user->setPrenom("Alexandre");
        $user->setAge(22);
        $user->setMental(65);
        $user->setSavoir(70);
        $user->setPhysique(45);
        $user->setSociabilite(57);
        $user->setComportement(60);
        $user->setMoyenne(59);
        $manager->persist($user);

        $user->setNom("Guillard");
        $user->setPrenom("Corentin");
        $user->setAge(19);
        $user->setMental(50);
        $user->setSavoir(55);
        $user->setPhysique(45);
        $user->setSociabilite(50);
        $user->setComportement(57);
        $user->setMoyenne(51);
        $manager->persist($user);

        $user->setNom("Le Roy-Nivot");
        $user->setPrenom("Mathis");
        $user->setAge(19);
        $user->setMental(70);
        $user->setSavoir(65);
        $user->setPhysique(53);
        $user->setSociabilite(38);
        $user->setComportement(68);
        $user->setMoyenne(59);
        $manager->persist($user);

        $user->setNom("Guerin");
        $user->setPrenom("Camille");
        $user->setAge(19);
        $user->setMental(63);
        $user->setSavoir(53);
        $user->setPhysique(68);
        $user->setSociabilite(53);
        $user->setComportement(60);
        $user->setMoyenne(59);
        $manager->persist($user);

        $user->setNom("Drouet");
        $user->setPrenom("Djimmy");
        $user->setAge(19);
        $user->setMental(50);
        $user->setSavoir(40);
        $user->setPhysique(43);
        $user->setSociabilite(45);
        $user->setComportement(40);
        $user->setMoyenne(44);
        $manager->persist($user);

        $user->setNom("Joulie");
        $user->setPrenom("Antonin");
        $user->setAge(20);
        $user->setMental(45);
        $user->setSavoir(45);
        $user->setPhysique(30);
        $user->setSociabilite(60);
        $user->setComportement(45);
        $user->setMoyenne(45);
        $manager->persist($user);

        $user->setNom("Maisonneuves");
        $user->setPrenom("Henry");
        $user->setAge(19);
        $user->setMental(65);
        $user->setSavoir(70);
        $user->setPhysique(55);
        $user->setSociabilite(75);
        $user->setComportement(63);
        $user->setMoyenne(66);
        $manager->persist($user);

        $user->setNom("Lecuit");
        $user->setPrenom("Matteo");
        $user->setAge(19);
        $user->setMental(68);
        $user->setSavoir(85);
        $user->setPhysique(45);
        $user->setSociabilite(63);
        $user->setComportement(68);
        $user->setMoyenne(66);
        $manager->persist($user);

        $user->setNom("Vera");
        $user->setPrenom("Samy");
        $user->setAge(19);
        $user->setMental(43);
        $user->setSavoir(98);
        $user->setPhysique(38);
        $user->setSociabilite(45);
        $user->setComportement(33);
        $user->setMoyenne(51);
        $manager->persist($user);

        $user->setNom("Teillais");
        $user->setPrenom("Johan");
        $user->setAge(22);
        $user->setMental(40);
        $user->setSavoir(30);
        $user->setPhysique(100);
        $user->setSociabilite(30);
        $user->setComportement(30);
        $user->setMoyenne(46);
        $manager->persist($user);

        $user->setNom("David");
        $user->setPrenom("Marceau");
        $user->setAge(19);
        $user->setMental(45);
        $user->setSavoir(75);
        $user->setPhysique(45);
        $user->setSociabilite(30);
        $user->setComportement(55);
        $user->setMoyenne(50);
        $manager->persist($user);



        $manager->flush();
    }
}
