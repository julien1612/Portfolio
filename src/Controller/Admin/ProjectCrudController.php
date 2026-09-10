<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
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

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre du projet'),
            TextField::new('shortDescription', 'Courte description (carte)'),
            TextEditorField::new('fullDescription', 'Description complète (modal)')
                ->setRequired(false),
            ArrayField::new('technologies', 'Technologies (ex: PHP 7.3, Symfony)'),
            ImageField::new('coverImage', 'Image principale')
                ->setBasePath('pictures/')
                ->setUploadDir('public/pictures/')
                ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]')
                ->setRequired(false),
            UrlField::new('githubUrl', 'Lien GitHub')
                ->setRequired(false),
            UrlField::new('websiteUrl', 'Lien Site Web')
                ->setRequired(false),
        ];
    }
}
