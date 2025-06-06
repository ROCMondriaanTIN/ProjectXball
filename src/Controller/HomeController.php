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

        if ($this->isGranted('ROLE_USER')) {
            return $this->render('user/index.html.twig');
        }

        // Geen rol: guest pagina
        return $this->render('home/index.html.twig');
    }

    #[Route('/players', name: 'players')]
    public function player(): Response
    {
        return $this->render('user/players.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/clubs', name: 'clubs')]
    public function club(): Response
    {
        return $this->render('user/clubs.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/leagues', name: 'leagues')]
    public function league(): Response
    {
        return $this->render('user/league.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('user/profile.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
