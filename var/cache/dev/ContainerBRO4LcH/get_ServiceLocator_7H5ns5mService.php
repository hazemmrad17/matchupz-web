<?php

namespace ContainerBRO4LcH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7H5ns5mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7H5ns5m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7H5ns5m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'materiel' => ['privates', '.errored..service_locator.7H5ns5m.App\\Entity\\Materiel', NULL, 'Cannot autowire service ".service_locator.7H5ns5m": it needs an instance of "App\\Entity\\Materiel" but this type has been excluded in "config/services.yaml".'],
            'slackNotifier' => ['privates', 'App\\Service\\SlackNotifier', 'getSlackNotifierService', true],
        ], [
            'materiel' => 'App\\Entity\\Materiel',
            'slackNotifier' => 'App\\Service\\SlackNotifier',
        ]);
    }
}
