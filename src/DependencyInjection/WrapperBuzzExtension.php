<?php
/**
 * Created by PhpStorm.
 * User: johann
 * Date: 20/03/19
 * Time: 14:44
 */

namespace ArengiBuzzBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class WrapperBuzzExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('buzz.yaml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('buzz.client.timeout', $config['client_timeout']);
        $container->setParameter('buzz.client.proxy', $config['proxy']);

    }
}