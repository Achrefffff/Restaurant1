<?php

namespace App\Controller\Admin;

use App\Entity\HoraireOuverture;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud ;


class HoraireOuvertureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HoraireOuverture::class;
    }
    
    public function configureCrud( Crud $crud ) : Crud 
    {
        return $crud->setEntityLabelInSingular('Horaire Ouverture')
        ->setEntityLabelInPlural('Horaires Ouverture')
        ->setPaginatorPageSize(30);
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
