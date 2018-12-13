<?php

namespace App\Controller;

use App\Repository\UtilisateursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        $viewData['utilisateurs']=$this->usersRepo->findAll();
        $viewData['utilisateur']=$this->usersRepo->find($id);

        return $this->render('main/index.html.twig',$viewData);
    }


}