<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class DishCrudController extends AbstractCrudController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getEntityFqcn(): string
    {
        return Dish::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInSingular('Plat')
            ->setEntityLabelInPlural('Gestion des Plats')
            ->setPaginatorPageSize(30);
    }

    public function configureFields(string $pageName): iterable
    {
        // Récupérer les champs du formulaire par défaut
        $fields = parent::configureFields($pageName);

        // Utiliser le champ AssociationField pour le champ "Category"
        $fields[] = AssociationField::new('category', 'Catégorie');

        // Utiliser le champ NumberField pour le champ "prix"
        $fields[] = NumberField::new('prix');

        // Ajouter les autres champs du plat (title, description)
        $fields[] = TextField::new('title');
        $fields[] = TextEditorField::new('description');

        return $fields;
    }
}
