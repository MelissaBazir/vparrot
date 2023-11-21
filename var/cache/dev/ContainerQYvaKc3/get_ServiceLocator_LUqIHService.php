<?php

namespace ContainerQYvaKc3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LUqIHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._lUqIH_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._lUqIH_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'companyRepository' => 'App\\Repository\\CompanyRepository',
            'paginator' => '?',
        ]);
    }
}
