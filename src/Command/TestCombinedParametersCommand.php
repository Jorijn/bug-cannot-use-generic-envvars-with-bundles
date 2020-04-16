<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCombinedParametersCommand extends Command
{
    protected $cacheTTL;
    protected $queueTTL;

    public function __construct(string $name = null, $cacheTTL, $queueTTL)
    {
        parent::__construct($name);

        $this->cacheTTL = $cacheTTL;
        $this->queueTTL = $queueTTL;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        dump('cache ttl:', $this->cacheTTL);
        dump('queue ttl:', $this->queueTTL);

        return 0;
    }
}
