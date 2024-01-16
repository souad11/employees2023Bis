<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EmployeeRepository;
use Symfony\Bundle\SecurityBundle\Security;
use App\Entity\Employee;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(EmployeeRepository $employeeRepository, Security $security): Response
    {
        /**
         * @var \App\Entity\Employee $currentUser
         */
        $currentUser = $security->getUser();

        if($security->isGranted('ROLE_USER')) {
            $firstName = $currentUser->getFirstName();
            $lastName = $currentUser->getLastName();
            $birthDate = $currentUser->getBirthDate();
            $hireDate = $currentUser->getHireDate();
            $gender = $currentUser->getGender();
            $photo = $currentUser->getPhoto();
            $id = $currentUser->getId();
        } 

        return $this->render('profile/index.html.twig', [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => $birthDate,
            'hireDate' => $hireDate,
            'gender' => $gender,
            'photo' => $photo,
            'id' => $id,
        ]);
    }

    
}
