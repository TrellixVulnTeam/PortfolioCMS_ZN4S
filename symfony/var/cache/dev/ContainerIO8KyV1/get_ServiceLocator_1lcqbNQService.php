<?php

namespace ContainerIO8KyV1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1lcqbNQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1lcqbNQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1lcqbNQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hobby' => ['privates', '.errored..service_locator.1lcqbNQ.App\\Entity\\Hobby', NULL, 'Cannot autowire service ".service_locator.1lcqbNQ": it references class "App\\Entity\\Hobby" but no such service exists.'],
        ], [
            'hobby' => 'App\\Entity\\Hobby',
        ]);
    }
}