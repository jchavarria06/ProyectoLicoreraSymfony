<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Producto;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class VinosController extends AbstractController
{
    /**
     * @Route("/vinos", name="vinos")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $em = $this->getDoctrine() ->getManager();
        
        $dql   = "SELECT a FROM AcmeMainBundle:Article a";
        $query = $em->getRepository(Producto::class) -> BuscarVinos();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render('vinos/index.html.twig', [
            'controller_name' => 'CervezasController',
            'pagination'=> $pagination
        ]);
    }
}
