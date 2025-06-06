<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/players', name: 'userPlayers')]
    public function player(): Response
    {
        return $this->render('user/players.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/clubs', name: 'userClubs')]
    public function club(): Response
    {
        return $this->render('user/clubs.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/leagues', name: 'userLeagues')]
    public function league(): Response
    {
        return $this->render('user/league.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/favorites', name: 'userFavorites')]
    public function favorites(): Response
    {
        return $this->render('user/favorites.html.twig', [
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
