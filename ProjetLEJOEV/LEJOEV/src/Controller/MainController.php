<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Repository\UtilisateursRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    public  $viewData =[];
    private  $usersRepo;

    public function __construct(UtilisateursRepository $usersRepo)
    {
        $this->usersRepo =$usersRepo;

    }
    /**
     * @Route("", name="main")
     */
    public function index()
    {

        $viewData['utilisateurs']=$this->usersRepo->findAll();
        return $this->render('main/all.html.twig', $viewData);
    }

    /**
     * @Route("/{id}", name="mainname")
     */
    public function indexname($id)
    {
        $viewData['Classement']=$this->usersRepo->findAllOrderedByMoyenne();
        $viewData['utilisateurs']=$this->usersRepo->findAll();
        $viewData['utilisateur']=$this->usersRepo->find($id);

        return $this->render('main/index.html.twig',$viewData);
    }

    /**
     * @Route("/administration/modifier/{id}", name="modifieride")
     *
     */
    public function modifierID(Utilisateurs $livreur,Request $request,ObjectManager $manager)

    {
        $formLivreur = $this ->createFormBuilder($livreur)
            ->add('prenom')
            ->getForm();

        $formLivreur->handleRequest($request);

        if($formLivreur->isSubmitted()&& $formLivreur->isValid()){
            $manager->persist($livreur);
            $manager->flush();

            return $this->redirectToRoute('main');
        }

        return $this->render('main/admin.html.twig',['formLivreur' =>$formLivreur->createView()]);
    }
}