<?php

namespace ContainerOEGC802;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4E2JJj5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4E2JJj5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4E2JJj5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'historiqueClub' => ['privates', '.errored..service_locator.4E2JJj5.App\\Entity\\HistoriqueClub', NULL, 'Cannot autowire service ".service_locator.4E2JJj5": it needs an instance of "App\\Entity\\HistoriqueClub" but this type has been excluded in "config/services.yaml".'],
        ], [
            'historiqueClub' => 'App\\Entity\\HistoriqueClub',
        ]);
    }
}
