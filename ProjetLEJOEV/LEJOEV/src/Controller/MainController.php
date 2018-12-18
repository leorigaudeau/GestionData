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
        $viewData['Classement']=$this->usersRepo->findAllOrderedByMoyenne();
        $viewData['utilisateurs']=$this->usersRepo->findAll();
        $viewData['utilisateur']=$this->usersRepo->find($id);

        return $this->render('main/index.html.twig',$viewData);
    }

    /**
     * @Route("/question/{id}", name="questionById")
     *
     */
    public function questionById($id)

    {
        $randNumber = rand(106, 120);
        $viewData['Questions'] = $this->questionRepo->findRandom($randNumber);

        return $this->render('main/questions.html.twig',$viewData);


    }


    /**
     * @Route("/administration/modifier/{id}", name="modifieride")
     *
     */
    public function modifierID(Utilisateurs $id,Request $request,ObjectManager $manager)

    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser()->getUsername();
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
}