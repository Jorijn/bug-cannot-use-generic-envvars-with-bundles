<?php

declare(strict_types=1);

namespace App\Bundle\QueueBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class TestQueueExtension extends ConfigurableExtension
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $container->setParameter('test_queue.ttl.default', $mergedConfig['ttl']['default']);
    }
}
