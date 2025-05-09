<?php

namespace ContainerBRO4LcH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DkTXbMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dkTXb_M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dkTXb_M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'googleCalendarService' => ['privates', 'App\\Service\\GoogleCalendarService', 'getGoogleCalendarServiceService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'googleCalendarService' => 'App\\Service\\GoogleCalendarService',
            'paginator' => '?',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
