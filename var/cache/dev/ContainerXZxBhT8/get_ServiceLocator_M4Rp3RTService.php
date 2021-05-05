<?php

namespace ContainerXZxBhT8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M4Rp3RTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m4Rp3RT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m4Rp3RT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClientController::delete' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController::edit' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController::show' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\EmployerController::delete' => ['privates', '.service_locator.iSuiQQo', 'get_ServiceLocator_ISuiQQoService', true],
            'App\\Controller\\EmployerController::edit' => ['privates', '.service_locator.iSuiQQo', 'get_ServiceLocator_ISuiQQoService', true],
            'App\\Controller\\EmployerController::show' => ['privates', '.service_locator.iSuiQQo', 'get_ServiceLocator_ISuiQQoService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ClientController:delete' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController:edit' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ClientController:show' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\EmployerController:delete' => ['privates', '.service_locator.iSuiQQo', 'get_ServiceLocator_ISuiQQoService', true],
            'App\\Controller\\EmployerController:edit' => ['privates', '.service_locator.iSuiQQo', 'get_ServiceLocator_ISuiQQoService', true],
            'App\\Controller\\EmployerController:show' => ['privates', '.service_locator.iSuiQQo', 'get_ServiceLocator_ISuiQQoService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ClientController::delete' => '?',
            'App\\Controller\\ClientController::edit' => '?',
            'App\\Controller\\ClientController::show' => '?',
            'App\\Controller\\EmployerController::delete' => '?',
            'App\\Controller\\EmployerController::edit' => '?',
            'App\\Controller\\EmployerController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ClientController:delete' => '?',
            'App\\Controller\\ClientController:edit' => '?',
            'App\\Controller\\ClientController:show' => '?',
            'App\\Controller\\EmployerController:delete' => '?',
            'App\\Controller\\EmployerController:edit' => '?',
            'App\\Controller\\EmployerController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
