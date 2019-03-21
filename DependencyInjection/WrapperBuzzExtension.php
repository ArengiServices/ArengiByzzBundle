<?php
/**
 * Created by PhpStorm.
 * User: johann
 * Date: 20/03/19
 * Time: 14:44
 */

namespace App\ArengiBuzzBundle\DependencyInjection;


use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class WrapperBuzzExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('buzz.yaml');

    }
}