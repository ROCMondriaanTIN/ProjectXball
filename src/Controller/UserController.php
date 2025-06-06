<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/member', name: 'app_member')]
    public function index(): Response
    {
        return $this->render('member/index.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    #[Route('/players', name: 'memberPlayers')]
    public function memberPlayer(): Response
    {
        return $this->render('member/players.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    #[Route('/clubs', name: 'memberClubs')]
    public function memberClub(): Response
    {
        return $this->render('member/clubs.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    #[Route('/leagues', name: 'memberLeagues')]
    public function memberLeague(): Response
    {
        return $this->render('member/league.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    #[Route('/favorites', name: 'memberFavorites')]
    public function memberFavorites(): Response
    {
        return $this->render('member/favorites.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }

    #[Route('/profile', name: 'profile')]
    public function memberProfile(): Response
    {
        return $this->render('member/profile.html.twig', [
            'controller_name' => 'MemberController',
        ]);
    }


}
