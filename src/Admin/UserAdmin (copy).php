<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\UserBundle\Model\UserManagerInterface;

class UserAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('username', TextType::class)
                ->add('first_name', TextType::class)
                ->add('last_name', TextType::class)
                //->add('plainPassword', TextType::class)
        //->add('password')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        //$datagridMapper->add('title');       

        $datagridMapper
                ->add('username')
                ->add('first_name')
                ->add('last_name')
        //->add('password')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {

        $listMapper
                ->addIdentifier('username')
                ->add('first_name')
                ->add('last_name')
                ->add('email')
                ->add('password', TextType::class)
        ;
    }
    
    //////////

}
