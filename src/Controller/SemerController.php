<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SemerController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('semer/home.html.twig', [
            ]);
    }

    public function header($currentPage){
        return $this->render('semer/header.html.twig' , [
            'currentPage' => $currentPage,
        ]);
    }

    public function footer(){
        return $this->render('semer/footer.html.twig' , [
        ]);
    }

    #[Route('/le-projet', name: 'projet')]
    public function projet(): Response
    {
        return $this->render('semer/projet.html.twig', [
            ]);
    }

    #[Route('/nos-objectifs', name: 'objectifs')]
    public function objectifs(): Response
    {
        return $this->render('semer/objectifs.html.twig', [
            ]);
    }

    #[Route('/presentation', name: 'presentation')]
    public function presentation(): Response
    {
        return $this->render('semer/presentation.html.twig', [
            ]);
    }

    #[Route('/beneficiaire', name: 'beneficiaire')]
    public function beneficiaire(): Response
    {
        return $this->render('semer/beneficiaire.html.twig', [
            ]);
    }

    #[Route('/nos-activites', name: 'activites')]
    public function activites(): Response
    {
        return $this->render('semer/activites.html.twig', [
            ]);
    }

    #[Route('/nos-outils', name: 'outils')]
    public function outils(): Response
    {
        return $this->render('semer/outils.html.twig', [
            ]);
    }
}
