<?php

namespace ContainerRXq9q0a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ItPjQ5rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ItPjQ5r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ItPjQ5r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BaseController::mojezgloszenia' => ['privates', '.service_locator.qcDIM1_', 'get_ServiceLocator_QcDIM1Service', true],
            'App\\Controller\\BaseController::nowakategoria' => ['privates', '.service_locator.AUQz.CV', 'get_ServiceLocator_AUQz_CVService', true],
            'App\\Controller\\BaseController::nowezgloszenie' => ['privates', '.service_locator.AUQz.CV', 'get_ServiceLocator_AUQz_CVService', true],
            'App\\Controller\\BaseController::zgloszenia' => ['privates', '.service_locator.qcDIM1_', 'get_ServiceLocator_QcDIM1Service', true],
            'App\\Controller\\BaseController::zgloszenie' => ['privates', '.service_locator.qcDIM1_', 'get_ServiceLocator_QcDIM1Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BaseController:mojezgloszenia' => ['privates', '.service_locator.qcDIM1_', 'get_ServiceLocator_QcDIM1Service', true],
            'App\\Controller\\BaseController:nowakategoria' => ['privates', '.service_locator.AUQz.CV', 'get_ServiceLocator_AUQz_CVService', true],
            'App\\Controller\\BaseController:nowezgloszenie' => ['privates', '.service_locator.AUQz.CV', 'get_ServiceLocator_AUQz_CVService', true],
            'App\\Controller\\BaseController:zgloszenia' => ['privates', '.service_locator.qcDIM1_', 'get_ServiceLocator_QcDIM1Service', true],
            'App\\Controller\\BaseController:zgloszenie' => ['privates', '.service_locator.qcDIM1_', 'get_ServiceLocator_QcDIM1Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\BaseController::mojezgloszenia' => '?',
            'App\\Controller\\BaseController::nowakategoria' => '?',
            'App\\Controller\\BaseController::nowezgloszenie' => '?',
            'App\\Controller\\BaseController::zgloszenia' => '?',
            'App\\Controller\\BaseController::zgloszenie' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BaseController:mojezgloszenia' => '?',
            'App\\Controller\\BaseController:nowakategoria' => '?',
            'App\\Controller\\BaseController:nowezgloszenie' => '?',
            'App\\Controller\\BaseController:zgloszenia' => '?',
            'App\\Controller\\BaseController:zgloszenie' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
