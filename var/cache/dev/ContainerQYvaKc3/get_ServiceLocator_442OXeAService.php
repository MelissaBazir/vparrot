<?php

namespace ContainerQYvaKc3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_442OXeAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.442OXeA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.442OXeA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'carRepository' => 'App\\Repository\\CarRepository',
            'paginator' => '?',
        ]);
    }
}