<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Producto;
use Symfony\Component\HttpFoundation\Request;

class CervezasController extends AbstractController
{
    /**
     * @Route("/cervezas", name="cervezas")
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $em = $this->getDoctrine() ->getManager();
        
        $dql   = "SELECT a FROM AcmeMainBundle:Article a";
        $query = $em->getRepository(Producto::class) -> BuscarCervezas();
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render('cervezas/index.html.twig', [
            'controller_name' => 'CervezasController',
            'pagination'=> $pagination
        ]);
    }

   
}
