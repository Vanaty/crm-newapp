<?php

namespace ContainerDX3Qcy5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllercheckService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NxgfFSG.App\Controller\SecurityController::check()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.NxgfFSG'] ?? $container->load('get_ServiceLocator_NxgfFSGService'));

        if (isset($container->privates['.service_locator.NxgfFSG.App\\Controller\\SecurityController::check()'])) {
            return $container->privates['.service_locator.NxgfFSG.App\\Controller\\SecurityController::check()'];
        }

        return $container->privates['.service_locator.NxgfFSG.App\\Controller\\SecurityController::check()'] = $a->withContext('App\\Controller\\SecurityController::check()', $container);
    }
}
