<?php

namespace App\DataFixtures;
use App\Entity\Utilisateurs;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new Utilisateurs();
        $user1->setNom("Vadillo");
        $user1->setPrenom("Matthieu");
        $user1->setAge(21);
        $user1->setMental(74);
        $user1->setSavoir(20);
        $user1->setPhysique(67);
        $user1->setSociabilite(80);
        $user1->setComportement(35);
        $user1->setMoyenne(55);
        $manager->persist($user1);

        $user2 = new Utilisateurs();
        $user2->setNom("Letembet");
        $user2->setPrenom("Christian");
        $user2->setAge(20);
        $user2->setMental(47);
        $user2->setSavoir(45);
        $user2->setPhysique(53);
        $user2->setSociabilite(70);
        $user2->setComportement(60);
        $user2->setMoyenne(54);
        $manager->persist($user2);

        $user3 = new Utilisateurs();
        $user3->setNom("Lafrechoux");
        $user3->setPrenom("elouane");
        $user3->setAge(18);
        $user3->setMental(37);
        $user3->setSavoir(42);
        $user3->setPhysique(65);
        $user3->setSociabilite(53);
        $user3->setComportement(52);
        $user3->setMoyenne(50);
        $manager->persist($user3);

        $user4 = new Utilisateurs();
        $user4->setNom("Cambert");
        $user4->setPrenom("Killian");
        $user4->setAge(19);
        $user4->setMental(35);
        $user4->setSavoir(40);
        $user4->setPhysique(58);
        $user4->setSociabilite(58);
        $user4->setComportement(53);
        $user4->setMoyenne(49);
        $manager->persist($user4);

        $user5 = new Utilisateurs();
        $user5->setNom("Suchot");
        $user5->setPrenom("Alexandre");
        $user5->setAge(22);
        $user5->setMental(58);
        $user5->setSavoir(72);
        $user5->setPhysique(42);
        $user5->setSociabilite(52);
        $user5->setComportement(62);
        $user5->setMoyenne(57);
        $manager->persist($user5);

        $user6 = new Utilisateurs();
        $user6->setNom("Guillard");
        $user6->setPrenom("Corentin");
        $user6->setAge(19);
        $user6->setMental(47);
        $user6->setSavoir(57);
        $user6->setPhysique(50);
        $user6->setSociabilite(48);
        $user6->setComportement(54);
        $user6->setMoyenne(51);
        $manager->persist($user6);

        $user7 = new Utilisateurs();
        $user7->setNom("Le Roy-Nivot");
        $user7->setPrenom("Mathis");
        $user7->setAge(19);
        $user7->setMental(67);
        $user7->setSavoir(62);
        $user7->setPhysique(53);
        $user7->setSociabilite(35);
        $user7->setComportement(68);
        $user7->setMoyenne(57);
        $manager->persist($user7);

        $user8 = new Utilisateurs();
        $user8->setNom("Guerin");
        $user8->setPrenom("Camille");
        $user8->setAge(19);
        $user8->setMental(52);
        $user8->setSavoir(50);
        $user8->setPhysique(65);
        $user8->setSociabilite(55);
        $user8->setComportement(60);
        $user8->setMoyenne(56);
        $manager->persist($user8);

        $user9 = new Utilisateurs();
        $user9->setNom("Drouet");
        $user9->setPrenom("Djimmy");
        $user9->setAge(19);
        $user9->setMental(47);
        $user9->setSavoir(38);
        $user9->setPhysique(42);
        $user9->setSociabilite(43);
        $user9->setComportement(40);
        $user9->setMoyenne(42);
        $manager->persist($user9);

        $user10 = new Utilisateurs();
        $user10->setNom("Joulie");
        $user10->setPrenom("Antonin");
        $user10->setAge(20);
        $user10->setMental(42);
        $user10->setSavoir(42);
        $user10->setPhysique(33);
        $user10->setSociabilite(60);
        $user10->setComportement(50);
        $user10->setMoyenne(45);
        $manager->persist($user10);

        $user11 = new Utilisateurs();
        $user11->setNom("Maisonneuve");
        $user11->setPrenom("Henry");
        $user11->setAge(19);
        $user11->setMental(60);
        $user11->setSavoir(57);
        $user11->setPhysique(52);
        $user11->setSociabilite(72);
        $user11->setComportement(62);
        $user11->setMoyenne(61);
        $manager->persist($user11);

        $user12 = new Utilisateurs();
        $user12->setNom("Lecuit");
        $user12->setPrenom("Matteo");
        $user12->setAge(19);
        $user12->setMental(63);
        $user12->setSavoir(83);
        $user12->setPhysique(40);
        $user12->setSociabilite(60);
        $user12->setComportement(65);
        $user12->setMoyenne(62);
        $manager->persist($user12);

        $user13 = new Utilisateurs();
        $user13->setNom("Vera");
        $user13->setPrenom("Samy");
        $user13->setAge(19);
        $user13->setMental(48);
        $user13->setSavoir(98);
        $user13->setPhysique(35);
        $user13->setSociabilite(47);
        $user13->setComportement(38);
        $user13->setMoyenne(53);
        $manager->persist($user13);

        $user14 = new Utilisateurs();
        $user14->setNom("Teillais");
        $user14->setPrenom("Johan");
        $user14->setAge(22);
        $user14->setMental(67);
        $user14->setSavoir(48);
        $user14->setPhysique(93);
        $user14->setSociabilite(68);
        $user14->setComportement(57);
        $user14->setMoyenne(67);
        $manager->persist($user14);

        $user15 = new Utilisateurs();
        $user15->setNom("David");
        $user15->setPrenom("Marceau");
        $user15->setAge(19);
        $user15->setMental(48);
        $user15->setSavoir(73);
        $user15->setPhysique(50);
        $user15->setSociabilite(37);
        $user15->setComportement(57);
        $user15->setMoyenne(53);
        $manager->persist($user15);

        $user16 = new Utilisateurs();
        $user16->setNom("Bigeard");
        $user16->setPrenom("Robin");
        $user16->setAge(19);
        $user16->setMental(42);
        $user16->setSavoir(73);
        $user16->setPhysique(43);
        $user16->setSociabilite(43);
        $user16->setComportement(58);
        $user16->setMoyenne(52);
        $manager->persist($user16);

        $user17 = new Utilisateurs();
        $user17->setNom("Reillon");
        $user17->setPrenom("Antonin");
        $user17->setAge(24);
        $user17->setMental(22);
        $user17->setSavoir(15);
        $user17->setPhysique(32);
        $user17->setSociabilite(33);
        $user17->setComportement(33);
        $user17->setMoyenne(27);
        $manager->persist($user17);

        $user18 = new Utilisateurs();
        $user18->setNom("Retiere");
        $user18->setPrenom("Evan");
        $user18->setAge(20);
        $user18->setMental(55);
        $user18->setSavoir(67);
        $user18->setPhysique(58);
        $user18->setSociabilite(53);
        $user18->setComportement(62);
        $user18->setMoyenne(59);
        $manager->persist($user18);

        $user19= new Utilisateurs();
        $user19->setNom("Crochet");
        $user19->setPrenom("Olivier");
        $user19->setAge(19);
        $user19->setMental(30);
        $user19->setSavoir(45);
        $user19->setPhysique(38);
        $user19->setSociabilite(33);
        $user19->setComportement(48);
        $user19->setMoyenne(39);
        $manager->persist($user19);

        $user20 = new Utilisateurs();
        $user20->setNom("Girard");
        $user20->setPrenom("Francois");
        $user20->setAge(21);
        $user20->setMental(67);
        $user20->setSavoir(35);
        $user20->setPhysique(67);
        $user20->setSociabilite(67);
        $user20->setComportement(57);
        $user20->setMoyenne(59);
        $manager->persist($user20);

        $user21 = new Utilisateurs();
        $user21->setNom("Sheidecker");
        $user21->setPrenom("Romain");
        $user21->setAge(19);
        $user21->setMental(45);
        $user21->setSavoir(27);
        $user21->setPhysique(58);
        $user21->setSociabilite(53);
        $user21->setComportement(45);
        $user21->setMoyenne(46);
        $manager->persist($user21);

        $user22 = new Utilisateurs();
        $user22->setNom("Battais");
        $user22->setPrenom("Erwan");
        $user22->setAge(19);
        $user22->setMental(55);
        $user22->setSavoir(50);
        $user22->setPhysique(28);
        $user22->setSociabilite(55);
        $user22->setComportement(62);
        $user22->setMoyenne(50);
        $manager->persist($user22);

        $user23 = new Utilisateurs();
        $user23->setNom("Vaucard");
        $user23->setPrenom("Adrien");
        $user23->setAge(19);
        $user23->setMental(68);
        $user23->setSavoir(90);
        $user23->setPhysique(48);
        $user23->setSociabilite(55);
        $user23->setComportement(65);
        $user23->setMoyenne(65);
        $manager->persist($user23);

        $user24 = new Utilisateurs();
        $user24->setNom("Ka");
        $user24->setPrenom("Racine");
        $user24->setAge(19);
        $user24->setMental(45);
        $user24->setSavoir(25);
        $user24->setPhysique(60);
        $user24->setSociabilite(35);
        $user24->setComportement(53);
        $user24->setMoyenne(44);
        $manager->persist($user24);

        $user25 = new Utilisateurs();
        $user25->setNom("Remaud");
        $user25->setPrenom("Sébastien");
        $user25->setAge(19);
        $user25->setMental(55);
        $user25->setSavoir(25);
        $user25->setPhysique(60);
        $user25->setSociabilite(35);
        $user25->setComportement(53);
        $user25->setMoyenne(50);
        $manager->persist($user25);

        $user26 = new Utilisateurs();
        $user26->setNom("Potier");
        $user26->setPrenom("Tanguy");
        $user26->setAge(19);
        $user26->setMental(53);
        $user26->setSavoir(80);
        $user26->setPhysique(58);
        $user26->setSociabilite(58);
        $user26->setComportement(65);
        $user26->setMoyenne(63);
        $manager->persist($user26);

        $user27 = new Utilisateurs();
        $user27->setNom("Guibert");
        $user27->setPrenom("Valentin");
        $user27->setAge(19);
        $user27->setMental(48);
        $user27->setSavoir(43);
        $user27->setPhysique(43);
        $user27->setSociabilite(45);
        $user27->setComportement(55);
        $user27->setMoyenne(47);
        $manager->persist($user27);

        $user28 = new Utilisateurs();
        $user28->setNom("Delreux");
        $user28->setPrenom("Pierre");
        $user28->setAge(20);
        $user28->setMental(48);
        $user28->setSavoir(43);
        $user28->setPhysique(35);
        $user28->setSociabilite(48);
        $user28->setComportement(50);
        $user28->setMoyenne(45);
        $manager->persist($user28);

        $user29 = new Utilisateurs();
        $user29->setNom("Rigaudeau");
        $user29->setPrenom("Léo");
        $user29->setAge(19);
        $user29->setMental(65);
        $user29->setSavoir(77);
        $user29->setPhysique(65);
        $user29->setSociabilite(72);
        $user29->setComportement(60);
        $user29->setMoyenne(68);
        $manager->persist($user29);

        $user30 = new Utilisateurs();
        $user30->setNom("XXX");
        $user30->setPrenom("YYY");
        $user30->setAge(19);
        $user30->setMental(100);
        $user30->setSavoir(100);
        $user30->setPhysique(100);
        $user30->setSociabilite(100);
        $user30->setComportement(100);
        $user30->setMoyenne(100);
        $manager->persist($user30);



        $manager->flush();
    }
}
