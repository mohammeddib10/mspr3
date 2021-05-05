<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Form\GestionPaieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/paie")
 */
class GestionPaieController extends AbstractController
{
    /**
     * @Route("/", name="gestion_paie", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(GestionPaieType::class);
        $form->handleRequest($request);

//        if ($form->isSubmitted() && $form->isValid()) {
//            $salaire = $request->request->get('gestion_paie')['salaire'];
//            $entreprise = $request->request->get('gestion_paie')['Client'];
//            return $this->redirectToRoute('gestion_paie');
//        }

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'GESTION PAIE',
            'form' => $form->createView(),
        ]);
    }
}
