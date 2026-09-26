<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Votre nom / Entreprise',
                'attr' => ['placeholder' => 'Ex: Jean Dupont (Agence Web)'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez renseigner votre nom.']),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre adresse e-mail',
                'attr' => ['placeholder' => 'nom@domaine.fr'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez renseigner votre e-mail.']),
                    new Assert\Email(['message' => 'L\'adresse e-mail n\'est pas valide.']),
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet',
                'attr' => ['placeholder' => 'Ex: Renfort Symfony / Projet au forfait'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez indiquer un sujet.']),
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'attr' => ['rows' => 5, 'placeholder' => 'Décrivez votre besoin...'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez écrire votre message.']),
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le message doit faire au moins {{ limit }} caractères.']),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer le message',
                'attr' => ['class' => 'btn btn-primary w-100 py-2 mt-3'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}