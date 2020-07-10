<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contacto;
use App\Form\ContactoType;
use Symfony\Component\HttpFoundation\Request;
class ContactoController extends AbstractController
{
    /**
     * @Route("/contacto", name="contacto")
     */
    public function index(Request $request)
    {
        $contacto = new Contacto();
        $form = $this -> createForm(ContactoType::class, $contacto);
        $form -> handleRequest($request);
        if($form -> isSubmitted() && $form ->isValid()){
            $em = $this -> getDoctrine() ->getManager();
            $em ->persist($contacto);
            $em ->flush();
            $this -> addFlash('exito', 'Se ha registrado correctamente'); 
            return $this -> redirectToRoute('contacto');
        }
        return $this->render('contacto/index.html.twig', [
            'controller_name' => 'ContactoController',
            'formulario' => $form ->createView()
        ]);
    }
}
