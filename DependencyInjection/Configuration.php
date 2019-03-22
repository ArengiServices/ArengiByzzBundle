<?php
/**
 * Created by PhpStorm.
 * User: johann
 * Date: 20/03/19
 * Time: 14:41
 */

namespace ArengiBuzzBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('arengi_buzz');
        $rootNode
            ->children()
                ->scalarNode('client_timeout')
                    ->defaultValue(5)
                ->end()
                ->scalarNode('proxy')
                    ->defaultNull()
                ->end()
            ->end()
        ;
        return $treeBuilder;
    }

}