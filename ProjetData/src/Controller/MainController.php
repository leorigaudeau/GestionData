<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\QuestionsRepository;
use App\Repository\UtilisateursRepository;
use Doctrine\Common\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Integer;
use ProxyManager\ProxyGenerator\AccessInterceptorScopeLocalizer\MethodGenerator\BindProxyProperties;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    public  $viewData =[];
    private  $usersRepo;
    private $questionRepo;


    public function __construct(UtilisateursRepository $usersRepo, QuestionsRepository $questionRepo)
    {
        $this->usersRepo =$usersRepo;
        $this->questionRepo=$questionRepo;

    }
    /**
     * @Route("", name="main")
     */
    public function index()
    {

        $viewData['utilisateurs']=$this->usersRepo->findAll();
        return $this->render('main/accueil.html.twig', $viewData);
    }

    /**
     * @Route("/analyse/{id}", name="mainname")
     */
    public function indexname($id)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        if ($user !='anon.'){
            $viewData['Classement']=$this->usersRepo->findAllOrderedByMoyenne();
            $viewData['utilisateurs']=$this->usersRepo->findAll();
            $viewData['utilisateur']=$this->usersRepo->find($id);

            return $this->render('main/index.html.twig',$viewData);
        }else{
            return $this->redirectToRoute('app_login');
        }

    }

    /**
     * @Route("/question/{id}", name="questionById")
     *
     */
    public function questionById($id)

    {
        $Allquestion = $this->questionRepo->findAll();
        $randNumber = rand($Allquestion[0]->getId(), $Allquestion[14]->getId());
        $viewData['Questions'] = $this->questionRepo->findRandom($randNumber);
        $viewData['CurrentUser'] = $this->usersRepo->find($id);


        return $this->render('main/questions.html.twig',$viewData);


    }


    /**
     * @Route("/administration/modifier/{id}", name="modifieride")
     *
     */
    public function modifierID(Utilisateurs $id,Request $request,ObjectManager $manager)

    {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

        if ($user !='anon.'){
            $user = $this->container->get('security.token_storage')->getToken()->getUser()->getUsername();
        }


        if ($user=='admin'){
            $formUsers = $this ->createFormBuilder($id)
                ->add('prenom')
                ->add('age')
                ->getForm();

            $formUsers->handleRequest($request);

            if($formUsers->isSubmitted()&& $formUsers->isValid()){
                $manager->persist($id);
                $manager->flush();

                return $this->redirectToRoute('main');
            }

            return $this->render('main/admin.html.twig',['formUsers' =>$formUsers->createView()]);
        }else{
            return $this->redirectToRoute('app_login');
        }


    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($user !='anon.') {
            session_destroy();
        }
        return $this->redirectToRoute('main');
    }

    /**
     * @Route("/ajout/{idu}/{idq}", name="ajout")
     */
    public function ajout($idu,$idq)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Question = $this->questionRepo->findRandom($idq);
        $RapportQuestion= $Question[0]->getRapportClass();
        $CurrentUser = $this->usersRepo->find($idu);


        if ($RapportQuestion == 'Mental') {
            $score=$CurrentUser->getMental()+10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setMental($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        } elseif ($RapportQuestion ==' Savoir') {
            $score=$CurrentUser->getSavoir()+10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setSavoir($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        } elseif ($RapportQuestion == 'Physique') {
            $score=$CurrentUser->getPhysique()+10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setPhysique($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        }elseif ($RapportQuestion == 'sociabilisation') {
            $score=$CurrentUser->getSociabilite()+10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setSociabilite($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        }elseif ($RapportQuestion == 'Comportement') {
            $score=$CurrentUser->getComportement()+10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setSociabilite($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        }


        $entityManager->flush();




        return $this->redirectToRoute('mainname', ['id' => $idu]);
    }
    /**
     * @Route("/suppress/{idu}/{idq}", name="suppress")
     */
    public function suppress($idu,$idq)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $Question = $this->questionRepo->findRandom($idq);
        $RapportQuestion= $Question[0]->getRapportClass();
        $CurrentUser = $this->usersRepo->find($idu);


        if ($RapportQuestion == 'Mental') {
            $score=$CurrentUser->getMental()-10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setMental($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        } elseif ($RapportQuestion ==' Savoir') {
            $score=$CurrentUser->getSavoir()-10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setSavoir($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        } elseif ($RapportQuestion == 'Physique') {
            $score=$CurrentUser->getPhysique()-10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setPhysique($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        }elseif ($RapportQuestion == 'sociabilisation') {
            $score=$CurrentUser->getSociabilite()-10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setSociabilite($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        }elseif ($RapportQuestion == 'Comportement') {
            $score=$CurrentUser->getComportement()-10;
            if ($score <=0){
                $score=0;
            }
            if ($score >=100){
                $score=100;
            }
            $CurrentUser->setSociabilite($score);
            $fullscore=$CurrentUser->getMental()+$CurrentUser->getPhysique()+$CurrentUser->getSavoir()+$CurrentUser->getSociabilite()+$CurrentUser->getComportement();
            $moyenne=$fullscore/5;
            $CurrentUser->setMoyenne($moyenne);
        }


        $entityManager->flush();




        return $this->redirectToRoute('mainname', ['id' => $idu]);
    }
}