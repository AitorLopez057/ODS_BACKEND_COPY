<?php

namespace ContainerNxokBej;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCursosControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CursosController' shared autowired service.
     *
     * @return \App\Controller\CursosController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CursosController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/CursosService.php';

        $container->services['App\\Controller\\CursosController'] = $instance = new \App\Controller\CursosController(new \App\Service\CursosService(($container->privates['App\\Repository\\CURSOSRepository'] ?? $container->load('getCURSOSRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\CursosController', $container));

        return $instance;
    }
}
