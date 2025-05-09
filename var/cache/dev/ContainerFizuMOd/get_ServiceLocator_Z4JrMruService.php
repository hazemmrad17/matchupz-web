<?php

namespace ContainerFizuMOd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z4JrMruService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z4JrMru' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z4JrMru'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'performanceJoueur' => ['privates', '.errored..service_locator.z4JrMru.App\\Entity\\PerformanceJoueur', NULL, 'Cannot autowire service ".service_locator.z4JrMru": it needs an instance of "App\\Entity\\PerformanceJoueur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'performanceJoueur' => 'App\\Entity\\PerformanceJoueur',
        ]);
    }
}
