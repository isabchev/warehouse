<?php

namespace WarehouseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\EntityRepository;

use WarehouseBundle\Entity\Screw;
use WarehouseBundle\Entity\ScrewTypeEntity;
use WarehouseBundle\Entity\ScrewQtyUnit;

class ScrewType extends AbstractType
{    
    private $type;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Name', 'attr' => ['class' => 'form-control form-add-edit-row']])
            ->add('type', EntityType::class, [
                'class' => ScrewTypeEntity::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('st')
                        ->orderBy('st.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Type',
                'attr' => ['class' => 'form-control form-add-edit-row auto-width']
            ])
            ->add('length', IntegerType::class, array('label' => 'Length', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('diameter', NumberType::class, array('label' => 'Diameter', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('qty_unit', EntityType::class, [
                'class' => ScrewQtyUnit::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('squ')
                        ->orderBy('squ.name', 'ASC');
                },
                'choice_label' => 'name',
                'label' => 'Qty Unit',
                'attr' => ['class' => 'form-control form-add-edit-row auto-width']
            ])
            ->add('number_of_screws', IntegerType::class, array('label' => 'Count', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('qty', IntegerType::class, array('label' => 'Qty', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('description', TextareaType::class, array('label' => 'Description', 'required' => false, 'attr' => array('class' => 'form-control form-add-edit-row', 'rows' => '10')))
            ->add('save', SubmitType::class, array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary form-add-edit-row')))
        ;
    }
}
