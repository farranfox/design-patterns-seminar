<?php

namespace App\Adapter;

final class Kernel
{
    private $container;

    public function boot()
    {
        $builder = new \DI\ContainerBuilder();
        $builder->addDefinitions([
            StatsInterface::class   => \DI\create(StatsAdapter::class)->constructor(new ThirdPartyStats()),
            SyncStatsUseCase::class => \DI\create()->constructor(\DI\get(StatsInterface::class)),
        ]);

        $this->container = $builder->build();
    }

    public function getContainer(): \DI\Container
    {
        return $this->container;
    }
}
