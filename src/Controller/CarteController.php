<?php

// src/Controller/CarteController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HoraireOuvertureRepository;
use App\Repository\CategoryRepository;
use App\Repository\DishRepository;

class CarteController extends AbstractController
{
    private $horaireOuvertureRepository;
    private $categoryRepository;
    private $dishRepository;

    public function __construct(
        HoraireOuvertureRepository $horaireOuvertureRepository,
        CategoryRepository $categoryRepository,
        DishRepository $dishRepository
    ) {
        $this->horaireOuvertureRepository = $horaireOuvertureRepository;
        $this->categoryRepository = $categoryRepository;
        $this->dishRepository = $dishRepository;
    }

    #[Route('/carte', name: 'app_carte')]
    public function index(): Response
    {
        // Récupérer tous les horaires d'ouverture depuis la base de données
        $horairesOuverture = $this->horaireOuvertureRepository->findAll();

        // Récupérer toutes les catégories avec leurs plats associés depuis la base de données
        $categories = $this->categoryRepository->findAllWithDishes();

        return $this->render('carte/index.html.twig', [
            'horairesOuverture' => $horairesOuverture,
            'categories' => $categories,
            
        ]);
    }
}

