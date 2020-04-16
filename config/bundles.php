<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    App\Bundle\CacheBundle\TestCacheBundle::class => ['all' => true],
    App\Bundle\QueueBundle\TestQueueBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
];
