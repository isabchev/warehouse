<?php

namespace WarehouseBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class WarehouseExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container )
    {
        $configuration = new Configuration();
        $processedConfig = $this->processConfiguration($configuration, $configs);

        $container->setParameter('warehouse.items_per_page', $processedConfig['items_per_page']);
    }
}

