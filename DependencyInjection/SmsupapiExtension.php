<?php

namespace smsup\SmsupapiBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;

class SmsupapiExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
    	$processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->getDefinition('smsup.smsupapi.sender')
                    ->addMethodCall('setApiid', array($config['api_id']));
        $container->getDefinition('smsup.smsupapi.sender')
                    ->addMethodCall('setApisecret', array($config['api_secret']));
    }

}
