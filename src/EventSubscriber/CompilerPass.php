<?php

namespace Silecust\BaseTheme\EventSubscriber;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class CompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {

        $definition = $container->findDefinition('twig.loader');
       $path = $container->getParameter('kernel.project_dir');

       // $definition->addMethodCall('addPath', [$path . '/vendor/silecust/alpha-theme/templates']);
        $x = 0;
    }

}