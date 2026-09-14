<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->renderContentMaximized();
    }

    public function configureFields(string $pageName): array
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('shortDescription', 'Courte description')
                ->hideOnIndex(),
            TextEditorField::new('fullDescription', 'Description complète')
                ->hideOnIndex(),
            ArrayField::new('technologies', 'Techs'),
            ImageField::new('coverImage', 'Image')
                ->setBasePath('/pictures')
                ->onlyOnIndex(),
            CollectionField::new('images', 'Galerie')
                ->hideOnIndex(),
            UrlField::new('githubUrl', 'GitHub')
                ->hideOnIndex(),
            UrlField::new('websiteUrl', 'Site Web')
                ->hideOnIndex(),
        ];
    }
}