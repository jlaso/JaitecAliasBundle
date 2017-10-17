<?php

namespace Jaitec\AliasBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;


class JaitecAliasExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = array();
        foreach ($configs as $subConfig) {
            $config = array_merge($config, $subConfig);
        }
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        if (!count($config)) {
             $loader->load('config.yml');
        }else{
            $container->setParameter('jaitec_alias', $config);
        }
    }
}
