<?php

namespace smsup\SmsupapiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('smsupapi');
        $rootNode->
        	children()
        		->scalarNode('api_id')
		            ->isRequired()
		            ->cannotBeEmpty()
		        ->end()
		        ->scalarNode('api_secret')
		            ->isRequired()
		            ->cannotBeEmpty()
		        ->end()
        	->end()
        ;

        return $treeBuilder;
    }
}