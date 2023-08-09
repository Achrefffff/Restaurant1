<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HoraireOuvertureRepository;
use App\Repository\ImageRepository; // Assurez-vous d'importer le ImageRepository.
use App\Entity\HoraireOuverture;

class HomeController extends AbstractController
{
    private $horaireOuvertureRepository;

    public function __construct(HoraireOuvertureRepository $horaireOuvertureRepository)
    {
        $this->horaireOuvertureRepository = $horaireOuvertureRepository;
    }

    #[Route('/', name: 'app_home')]
    public function index(ImageRepository $imageRepository): Response
    {
        // Récupérer tous les horaires d'ouverture depuis la base de données
        $horairesOuverture = $this->horaireOuvertureRepository->findAll();

        // Récupérer toutes les images depuis la base de données
        $images = $imageRepository->findAll();

        return $this->render('home/index.html.twig', [
            'horairesOuverture' => $horairesOuverture,
            'images' => $images, // Passer les images à la vue
        ]);
    }
}
