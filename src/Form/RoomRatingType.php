<?php

namespace App\Form;

use App\Entity\RoomRating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class RoomRatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('comment', TextType::class, [
                'attr' => [
                    'class' => 'form-control comment-box',
                ],
            ])
            ->add('rating', null, [
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 5,
                        'notInRangeMessage' => 'La note doit être comprise entre 1 et 5',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control rating-box',
                    'placeholder' => 'Note sur 5',
                ],
            ])
            ->add('client', HiddenType::class, [
                'data' => $options['client']->getId(),
                'mapped' => false,
            ])
            ->add('room', HiddenType::class, [
                'data' => $options['room']->getId(),
                'mapped' => false,
            ])
            ->add('posted_at', HiddenType::class, [
                'data' => (new \DateTimeImmutable())->format('Y-m-d H:i:s'),
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RoomRating::class,
        ]);

        $resolver->setDefined(['client', 'room']);
    }
}
