<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DoctorController extends AbstractController
{
    /**
     * @Route("/doctor", name="doctor")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DoctorController.php',
        ]);
    }

    /**
     * @Route("/doctor", method={"POST"})
     */
    public function store() {
        
    }

    public function update() {
        
    }

    public function destroy(){
        
    }

    public function show(){
        
    }
}
