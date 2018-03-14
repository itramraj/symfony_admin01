<?php

namespace App;

use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel {

    public function registerBundles() {

        $bundles = [
            // ...
            // The admin requires some twig functions defined in the security
            // bundle, like is_granted. Register this bundle if it wasn't the case
            // already.
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            // These are the other bundles the SonataAdminBundle relies on
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            // And finally
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\UserBundle\SonataUserBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            // ...
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            //..
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        ];
    }

}
