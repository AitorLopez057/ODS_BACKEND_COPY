<?php

namespace ContainerNxokBej;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntidadesExternasControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EntidadesExternasController' shared autowired service.
     *
     * @return \App\Controller\EntidadesExternasController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EntidadesExternasController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/EntidadesExternasService.php';

        $container->services['App\\Controller\\EntidadesExternasController'] = $instance = new \App\Controller\EntidadesExternasController(new \App\Service\EntidadesExternasService(($container->privates['App\\Repository\\ENTIDADESEXTERNASRepository'] ?? $container->load('getENTIDADESEXTERNASRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\EntidadesExternasController', $container));

        return $instance;
    }
}
