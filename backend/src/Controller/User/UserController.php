<?php


namespace App\Controller\User;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @package App\Controller\User
 * @Route("/user", name="user.")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function getIndex()
    {
        return $this->render("user/index.html.twig");
    }
}