<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Producto;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class LicoresController extends AbstractController
{
    /**
     * @Route("/licores", name="licores")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $em = $this->getDoctrine() ->getManager();
        
        $dql   = "SELECT a FROM AcmeMainBundle:Article a";
        $query = $em->getRepository(Producto::class) -> BuscarLicores();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render('licores/index.html.twig', [
            'controller_name' => 'CervezasController',
            'pagination'=> $pagination
        ]);
    }
}
