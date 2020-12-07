<?php

namespace WarehouseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use WarehouseBundle\Entity\Item;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Name', 'attr' => array('class' => 'form-control form-add-edit-row')))
            ->add('description', TextareaType::class, array('label' => 'Description', 'required' => false, 'attr' => array('class' => 'form-control form-add-edit-row', 'rows' => '10')))
            ->add('unit', ChoiceType::class, array(
                'choices' => array(
                    '' => '0',
                    'Boxes' => '1',
                    'Cans' => '2',
                    'Tins' => '3',
                    'Pcs' => '4'
                ),
                'label' => 'Units',
                'attr' => array('class' => 'form-control form-add-edit-row auto-width')
            ))
            ->add('qty', IntegerType::class, array('label' => 'Qty', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('save', SubmitType::class, array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary form-add-edit-row')))
        ;
    }
}
