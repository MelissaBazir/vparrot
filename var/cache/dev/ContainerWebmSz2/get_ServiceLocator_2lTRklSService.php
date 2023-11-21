<?php

namespace ContainerWebmSz2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2lTRklSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2lTRklS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2lTRklS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'car' => ['privates', '.errored..service_locator.2lTRklS.App\\Entity\\Car', NULL, 'Cannot autowire service ".service_locator.2lTRklS": it needs an instance of "App\\Entity\\Car" but this type has been excluded in "config/services.yaml".'],
        ], [
            'car' => 'App\\Entity\\Car',
        ]);
    }
}
