<?php

namespace ContainerIO8KyV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EventController' shared autowired service.
     *
     * @return \App\Controller\EventController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EventController.php';

        $container->services['App\\Controller\\EventController'] = $instance = new \App\Controller\EventController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\EventController', $container));

        return $instance;
    }
}
