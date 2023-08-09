<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HoraireOuvertureRepository;
use App\Repository\FormulaRepository;
use App\Repository\MenuRepository;

class MenuDisplayController extends AbstractController
{
    private $horaireOuvertureRepository;
    private $menuRepository;
    private $formulaRepository;

    public function __construct(
        HoraireOuvertureRepository $horaireOuvertureRepository,
        MenuRepository $menuRepository,
        FormulaRepository $formulaRepository
    ) {
        $this->horaireOuvertureRepository = $horaireOuvertureRepository;
        $this->menuRepository = $menuRepository;
        $this->formulaRepository = $formulaRepository;
    }
    
    #[Route('/menu', name: 'app_menu_display')]
    public function index(): Response 
    {
        $horairesOuverture = $this->horaireOuvertureRepository->findAll();
        $menus = $this->menuRepository->findAll(); // Utilisation du service injecté

        return $this->render('menu_display/index.html.twig', [
            'menus' => $menus, // Passer les menus au template
            'horairesOuverture' => $horairesOuverture,
        ]);
    }
}
