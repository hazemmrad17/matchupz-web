<?php

namespace ContainerFizuMOd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I0N9PQMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i0N9PQM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i0N9PQM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'joueurRepository' => ['privates', 'App\\Repository\\JoueurRepository', 'getJoueurRepositoryService', true],
        ], [
            'joueurRepository' => 'App\\Repository\\JoueurRepository',
        ]);
    }
}
