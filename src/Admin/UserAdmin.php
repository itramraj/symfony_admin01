<?php

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\UserBundle\Model\UserManagerInterface;
use Sonata\AdminBundle\Admin\AbstractAdminExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

//use FOS\UserBundle\Model\User as ;

class UserAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
//        $formMapper
//                ->add('username', TextType::class)
//                ->add('first_name', TextType::class)
//                ->add('last_name', TextType::class)
//                //->add('plainPassword', TextType::class)
//        //->add('password')
//
//        ;

        $formMapper
                ->with('General')
                ->add('username', TextType::class)
                ->add('first_name', TextType::class)
                ->add('last_name', TextType::class)
                ->add('email')
                //->add('plainPassword', TextType::class)
                ->end()
                ->with('Groups')
                //->add('groups', 'sonata_type_model', ['required' => false])
                ->add('roles', ChoiceType::class, [
                    'multiple' => true,
                    'expanded' => true, // render check-boxes
                    'choices' => [
                        'Super Admin' => 'ROLE_SUPER_ADMIN',
                        'Admin' => 'ROLE_ADMIN',
                        'Manager' => 'ROLE_MANAGER',
                    ],
                ])
                ->end()
                ->with('Management')
                //->add('roles', 'sonata_security_roles', ['multiple' => true])
                //->add('locked', null, ['required' => false])
                //->add('expired', null, ['required' => false])
                ->add('enabled', null, ['required' => false])
                //->add('credentialsExpired', null, ['required' => false])
                ->end()
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
                //->add('password', TextType::class)
                ->add('roles')
                ->add('lastLogin')
        ;
    }

    //////////
}
