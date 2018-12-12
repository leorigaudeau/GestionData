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
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/{name}", name="mainname")
     */
    public function indexname($name)
    {
        $viewData['utilisateur']=$this->usersRepo->find($name);

        return $this->render('main/index.html.twig',$viewData);
    }


}
