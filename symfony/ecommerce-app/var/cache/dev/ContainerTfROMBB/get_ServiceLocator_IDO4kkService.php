<?php

namespace ContainerTfROMBB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IDO4kkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iD_O4kk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iD_O4kk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'user' => ['privates', '.errored..service_locator.iD_O4kk.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.iD_O4kk": it references class "App\\Entity\\Utilisateur" but no such service exists.'],
        ], [
            'em' => '?',
            'security' => '?',
            'user' => 'App\\Entity\\Utilisateur',
        ]);
    }
}