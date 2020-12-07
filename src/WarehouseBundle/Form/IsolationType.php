<?php

namespace WarehouseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use WarehouseBundle\Entity\Item;

class IsolationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Name', 'attr' => array('class' => 'form-control form-add-edit-row')))
            ->add('size', IntegerType::class, array('label' => 'Size', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('qty', IntegerType::class, array('label' => 'Qty', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('pcs_in_pack', IntegerType::class, array('label' => 'Pcs In Pack', 'attr' => array('class' => 'form-control form-add-edit-row-int form-add-edit-row')))
            ->add('save', SubmitType::class, array('label' => 'Save', 'attr' => array('class' => 'btn btn-primary form-add-edit-row')))
        ;
    }
}
