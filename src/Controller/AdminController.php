<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/players', name: 'adminPlayers')]
    public function adminPlayers(): Response
    {
        return $this->render('admin/players.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    #[Route('/clubs', name: 'adminClubs')]
    public function adminClub(): Response
    {
        return $this->render('admin/clubs.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/leagues', name: 'adminLeagues')]
    public function adminLeague(): Response
    {
        return $this->render('admin/league.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/favorites', name: 'adminEditUser')]
    public function adminFavorites(): Response
    {
        return $this->render('admin/editUser.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/profile', name: 'profile')]
    public function adminProfile(): Response
    {
        return $this->render('admin/profile.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
