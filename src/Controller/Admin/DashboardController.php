<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\HoraireOuverture;
use App\Entity\Image;
use App\Entity\Category;
use App\Entity\Dish;
use App\Entity\Menu;
use App\Entity\Formula;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
       

        
         return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('   Admin        -         Quai Antique');
            
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Horaires', 'fa fa-business-time', HoraireOuverture::class);
        yield MenuItem::linkToCrud('Photos', 'fa fa-images', Image::class);
        yield MenuItem::linkToCrud('Catégorie', 'fa fa-sliders', Category::class);
        yield MenuItem::linkToCrud('Plats', 'fa fa-bowl-rice', Dish::class);
        yield MenuItem::linkToCrud('Menus', 'fa fa-bars', Menu::class);
        yield MenuItem::linkToCrud('Formules', 'fa fa-utensils', Formula::class);
    }
}
