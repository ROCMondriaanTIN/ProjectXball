<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EmployeeController extends AbstractController
{
    #[Route('/employee/home', name: 'app_employee')]
    public function index(): Response
    {
        return $this->render('employee/index.html.twig', [
            'controller_name' => 'EmployeeController',
        ]);
    }

    #[Route('/employee/players', name: 'employeePlayers')]
    public function employeePlayer(): Response
    {
        return $this->render('employee/players.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/employee/clubs', name: 'employeeClubs')]
    public function employeeClub(): Response
    {
        return $this->render('employee/clubs.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/employee/leagues', name: 'employeeLeagues')]
    public function employeeLeague(): Response
    {
        return $this->render('employee/league.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/employee/favorites', name: 'employeeFavorites')]
    public function employeeFavorites(): Response
    {
        return $this->render('employee/favorites.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/employee/profile', name: 'profile')]
    public function employeeProfile(): Response
    {
        return $this->render('employee/profile.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

}
