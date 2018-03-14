<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserControllerAdminController extends Controller
{
    /**
     * @Route("/user/controller/admin", name="user_controller_admin")
     */
    public function index()
    {
        return $this->render('user_controller_admin/index.html.twig', [
            'controller_name' => 'UserControllerAdminController',
        ]);
    }
}
