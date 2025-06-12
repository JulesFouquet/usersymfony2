<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Ajout du champ email
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Votre e-mail',
                'required' => true,
                'attr' => [
                    'placeholder' => 'exemple@domaine.com'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here, par exemple 'data_class' si lié à une entité
        ]);
    }
}
