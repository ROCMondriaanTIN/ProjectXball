<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        // Eerst de hoogste rollen controleren
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('admin/index.html.twig');
        }

        if ($this->isGranted('ROLE_EMPLOYEE')) {
            return $this->render('employee/index.html.twig');
        }

        if ($this->isGranted('ROLE_MEMBER')) {
            return $this->render('member/index.html.twig');
        }

        // Geen rol: guest pagina
        return $this->render('home/index.html.twig');
    }

    #[Route('/home/players', name: 'players')]
    public function player(): Response
    {
        return $this->render('home/players.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/home/clubs', name: 'clubs')]
    public function club(): Response
    {
        return $this->render('home/clubs.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/home/leagues', name: 'leagues')]
    public function league(): Response
    {
        return $this->render('home/league.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

}
