<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

use App\Entity\Kategoria;

class ZgloszenieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nazwa', TextType::class,)
            ->add('opis', TextType::class)
            ->add('kategoria', EntityType::class, [
                'class' => Kategoria::class,
                'choice_label' => 'nazwa',
                'label' => 'Kategoria '
            ])
            ->add('save', SubmitType::class,['label' => 'Dodaj']);
    }
}