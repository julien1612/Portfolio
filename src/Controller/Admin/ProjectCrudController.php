<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Form\ProjectImageType;
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
            ImageField::new('coverImage', 'Image de couverture')
                ->setBasePath('/pictures')
                ->setUploadDir('public/pictures'),

            // CORRECTION DE LA GALERIE :
            CollectionField::new('images', 'Galerie')
                ->setEntryType(ProjectImageType::class)
                ->setFormTypeOption('by_reference', false)
                ->allowAdd()
                ->allowDelete()
                ->hideOnIndex(),

            UrlField::new('githubUrl', 'GitHub')
                ->hideOnIndex(),
            UrlField::new('websiteUrl', 'Site Web')
                ->hideOnIndex(),
        ];
    }
}
