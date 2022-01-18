<?php


namespace App\Controller;


use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class SecurityController extends AbstractController
{
    // public function index(UserPasswordHasherInterface $passwordHasher)
    // {
    //     // ... e.g. get the user data from a registration form
    //     $user = new User(...);
    //     $plaintextPassword = ...;

    //     // hash the password (based on the security.yaml config for the $user class)
    //     $hashedPassword = $passwordHasher->hashPassword(
    //         $user,
    //         $plaintextPassword
    //     );
    //     $user->setPassword($hashedPassword);

    //     // ...
    // }

        #[Route(path: '/api/login', name: 'api_login', methods: ['POST'])]

    public function login() {

        $user = $this->getUser();

        return $this->json([
            'name' => $user->getName(),
            'roles' => $user->getRoles(),
            'token' => 'fdfgergdfgfhjtyh'
        ]);
    }
};
