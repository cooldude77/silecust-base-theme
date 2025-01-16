<?php

namespace Silecust\BaseTheme;

use Silecust\AlphaTheme\EventSubscriber\AlphaThemeBundleCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SilecustBaseThemeBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('./Resources/config/services.yaml');

    }

    public function build(ContainerBuilder $container):void
    {
     //   $container->addCompilerPass(new AlphaThemeBundleCompilerPass());
    }
}