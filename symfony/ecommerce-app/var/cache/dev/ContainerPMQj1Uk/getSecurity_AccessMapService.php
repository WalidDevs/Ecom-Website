<?php

namespace ContainerPMQj1Uk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMap.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/register');
        $b = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/profile');
        $c = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/utilisateurs/edit/.*');
        $d = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/utilisateurs/delete/.*');

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/login_check'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add($a, [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add($b, [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add($b, [0 => 'ROLE_USER'], NULL);
        $instance->add($c, [0 => 'ROLE_USER'], NULL);
        $instance->add($d, [0 => 'ROLE_USER'], NULL);
        $instance->add($a, [0 => 'ROLE_USER'], NULL);
        $instance->add($b, [0 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/produits/new'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/produits/.*/edit'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/produitsdelete/.*'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add($c, [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add($d, [0 => 'IS_AUTHENTICATED_FULLY'], NULL);

        return $instance;
    }
}