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

        $user->setNom("Letembet");
        $user->setPrenom("Christian");
        $user->setAge(20);
        $user->setMental(47);
        $user->setSavoir(45);
        $user->setPhysique(53);
        $user->setSociabilite(70);
        $user->setComportement(60);
        $user->setMoyenne(54);
        $manager->persist($user);

        $user->setNom("Lafrechoux");
        $user->setPrenom("elouane");
        $user->setAge(18);
        $user->setMental(37);
        $user->setSavoir(42);
        $user->setPhysique(65);
        $user->setSociabilite(53);
        $user->setComportement(52);
        $user->setMoyenne(50);
        $manager->persist($user);

        $user->setNom("Cambert");
        $user->setPrenom("Killian");
        $user->setAge(19);
        $user->setMental(35);
        $user->setSavoir(40);
        $user->setPhysique(58);
        $user->setSociabilite(58);
        $user->setComportement(53);
        $user->setMoyenne(49);
        $manager->persist($user);

        $user->setNom("Suchot");
        $user->setPrenom("Alexandre");
        $user->setAge(22);
        $user->setMental(58);
        $user->setSavoir(72);
        $user->setPhysique(42);
        $user->setSociabilite(52);
        $user->setComportement(62);
        $user->setMoyenne(57);
        $manager->persist($user);

        $user->setNom("Guillard");
        $user->setPrenom("Corentin");
        $user->setAge(19);
        $user->setMental(47);
        $user->setSavoir(57);
        $user->setPhysique(50);
        $user->setSociabilite(48);
        $user->setComportement(54);
        $user->setMoyenne(51);
        $manager->persist($user);

        $user->setNom("Le Roy-Nivot");
        $user->setPrenom("Mathis");
        $user->setAge(19);
        $user->setMental(67);
        $user->setSavoir(62);
        $user->setPhysique(53);
        $user->setSociabilite(35);
        $user->setComportement(68);
        $user->setMoyenne(57);
        $manager->persist($user);

        $user->setNom("Guerin");
        $user->setPrenom("Camille");
        $user->setAge(19);
        $user->setMental(52);
        $user->setSavoir(50);
        $user->setPhysique(65);
        $user->setSociabilite(55);
        $user->setComportement(60);
        $user->setMoyenne(56);
        $manager->persist($user);

        $user->setNom("Drouet");
        $user->setPrenom("Djimmy");
        $user->setAge(19);
        $user->setMental(47);
        $user->setSavoir(38);
        $user->setPhysique(42);
        $user->setSociabilite(43);
        $user->setComportement(40);
        $user->setMoyenne(42);
        $manager->persist($user);

        $user->setNom("Joulie");
        $user->setPrenom("Antonin");
        $user->setAge(20);
        $user->setMental(42);
        $user->setSavoir(42);
        $user->setPhysique(33);
        $user->setSociabilite(60);
        $user->setComportement(50);
        $user->setMoyenne(45);
        $manager->persist($user);

        $user->setNom("Maisonneuve");
        $user->setPrenom("Henry");
        $user->setAge(19);
        $user->setMental(60);
        $user->setSavoir(57);
        $user->setPhysique(52);
        $user->setSociabilite(72);
        $user->setComportement(62);
        $user->setMoyenne(61);
        $manager->persist($user);

        $user->setNom("Lecuit");
        $user->setPrenom("Matteo");
        $user->setAge(19);
        $user->setMental(63);
        $user->setSavoir(83);
        $user->setPhysique(40);
        $user->setSociabilite(60);
        $user->setComportement(65);
        $user->setMoyenne(62);
        $manager->persist($user);

        $user->setNom("Vera");
        $user->setPrenom("Samy");
        $user->setAge(19);
        $user->setMental(48);
        $user->setSavoir(98);
        $user->setPhysique(35);
        $user->setSociabilite(47);
        $user->setComportement(38);
        $user->setMoyenne(53);
        $manager->persist($user);

        $user->setNom("Teillais");
        $user->setPrenom("Johan");
        $user->setAge(22);
        $user->setMental(67);
        $user->setSavoir(48);
        $user->setPhysique(93);
        $user->setSociabilite(68);
        $user->setComportement(57);
        $user->setMoyenne(67);
        $manager->persist($user);

        $user->setNom("David");
        $user->setPrenom("Marceau");
        $user->setAge(19);
        $user->setMental(48);
        $user->setSavoir(73);
        $user->setPhysique(50);
        $user->setSociabilite(37);
        $user->setComportement(57);
        $user->setMoyenne(53);
        $manager->persist($user);

        $user->setNom("Bigeard");
        $user->setPrenom("Robin");
        $user->setAge(19);
        $user->setMental(42);
        $user->setSavoir(73);
        $user->setPhysique(43);
        $user->setSociabilite(43);
        $user->setComportement(58);
        $user->setMoyenne(52);
        $manager->persist($user);

        $user->setNom("Reillon");
        $user->setPrenom("Antonin");
        $user->setAge(24);
        $user->setMental(22);
        $user->setSavoir(15);
        $user->setPhysique(32);
        $user->setSociabilite(33);
        $user->setComportement(33);
        $user->setMoyenne(27);
        $manager->persist($user);

        $user->setNom("Retiere");
        $user->setPrenom("Evan");
        $user->setAge(20);
        $user->setMental(55);
        $user->setSavoir(67);
        $user->setPhysique(58);
        $user->setSociabilite(53);
        $user->setComportement(62);
        $user->setMoyenne(59);
        $manager->persist($user);

        $user->setNom("Crochet");
        $user->setPrenom("Olivier");
        $user->setAge(19);
        $user->setMental(30);
        $user->setSavoir(45);
        $user->setPhysique(38);
        $user->setSociabilite(33);
        $user->setComportement(48);
        $user->setMoyenne(39);
        $manager->persist($user);

        $user->setNom("Girard");
        $user->setPrenom("Francois");
        $user->setAge(21);
        $user->setMental(67);
        $user->setSavoir(35);
        $user->setPhysique(67);
        $user->setSociabilite(67);
        $user->setComportement(57);
        $user->setMoyenne(59);
        $manager->persist($user);

        $user->setNom("Sheidecker");
        $user->setPrenom("Romain");
        $user->setAge(19);
        $user->setMental(45);
        $user->setSavoir(27);
        $user->setPhysique(58);
        $user->setSociabilite(53);
        $user->setComportement(45);
        $user->setMoyenne(46);
        $manager->persist($user);

        $user->setNom("Battais");
        $user->setPrenom("Erwan");
        $user->setAge(19);
        $user->setMental(55);
        $user->setSavoir(50);
        $user->setPhysique(28);
        $user->setSociabilite(55);
        $user->setComportement(62);
        $user->setMoyenne(50);
        $manager->persist($user);

            $user->setNom("Vaucard");
        $user->setPrenom("Adrien");
        $user->setAge(19);
        $user->setMental(68);
        $user->setSavoir(90);
        $user->setPhysique(48);
        $user->setSociabilite(55);
        $user->setComportement(65);
        $user->setMoyenne(65);
        $manager->persist($user);

        $user->setNom("Ka");
        $user->setPrenom("Racine");
        $user->setAge(19);
        $user->setMental(45);
        $user->setSavoir(25);
        $user->setPhysique(60);
        $user->setSociabilite(35);
        $user->setComportement(53);
        $user->setMoyenne(44);
        $manager->persist($user);

        $user->setNom("Remaud");
        $user->setPrenom("Sébastien");
        $user->setAge(19);
        $user->setMental(55);
        $user->setSavoir(25);
        $user->setPhysique(60);
        $user->setSociabilite(35);
        $user->setComportement(53);
        $user->setMoyenne(50);
        $manager->persist($user);

        $user->setNom("Potier");
        $user->setPrenom("Tanguy");
        $user->setAge(19);
        $user->setMental(53);
        $user->setSavoir(80);
        $user->setPhysique(58);
        $user->setSociabilite(58);
        $user->setComportement(65);
        $user->setMoyenne(63);
        $manager->persist($user);

        $user->setNom("Guibert");
        $user->setPrenom("Valentin");
        $user->setAge(19);
        $user->setMental(48);
        $user->setSavoir(43);
        $user->setPhysique(43);
        $user->setSociabilite(45);
        $user->setComportement(55);
        $user->setMoyenne(47);
        $manager->persist($user);

        $user->setNom("Delreux");
        $user->setPrenom("Pierre");
        $user->setAge(20);
        $user->setMental(48);
        $user->setSavoir(43);
        $user->setPhysique(35);
        $user->setSociabilite(48);
        $user->setComportement(50);
        $user->setMoyenne(45);
        $manager->persist($user);

        $user->setNom("Rigaudeau");
        $user->setPrenom("Léo");
        $user->setAge(19);
        $user->setMental(65);
        $user->setSavoir(77);
        $user->setPhysique(65);
        $user->setSociabilite(72);
        $user->setComportement(60);
        $user->setMoyenne(68);
        $manager->persist($user);

        $user->setNom("Guibert");
        $user->setPrenom("Valentin");
        $user->setAge(20);
        $user->setMental(48);
        $user->setSavoir(33);
        $user->setPhysique(55);
        $user->setSociabilite(53);
        $user->setComportement(55);
        $user->setMoyenne(49);
        $manager->persist($user);





        $manager->flush();
    }
}
