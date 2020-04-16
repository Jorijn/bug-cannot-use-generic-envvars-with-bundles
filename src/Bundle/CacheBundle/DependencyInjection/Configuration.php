<?php

declare(strict_types=1);

namespace App\Bundle\CacheBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('test_cache');

        $treeBuilder
            ->getRootNode()
            ->children()
                ->arrayNode('ttl')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->integerNode('default')
                            ->defaultValue(10)
                        ->end()
                    ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
