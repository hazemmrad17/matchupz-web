<?php

namespace ContainerOEGC802;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nm9r6boService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nm9r6bo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nm9r6bo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evaluationPhysique' => ['privates', '.errored..service_locator.Nm9r6bo.App\\Entity\\EvaluationPhysique', NULL, 'Cannot autowire service ".service_locator.Nm9r6bo": it needs an instance of "App\\Entity\\EvaluationPhysique" but this type has been excluded in "config/services.yaml".'],
        ], [
            'evaluationPhysique' => 'App\\Entity\\EvaluationPhysique',
        ]);
    }
}
