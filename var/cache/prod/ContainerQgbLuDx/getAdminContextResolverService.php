<?php

namespace ContainerQgbLuDx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminContextResolverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\AdminContextResolver'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
