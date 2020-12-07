<?php
namespace WarehouseBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root( 'warehouse' );

        $rootNode->children()->integerNode('items_per_page')->defaultValue(10)->end();

        return $treeBuilder;
    }
}