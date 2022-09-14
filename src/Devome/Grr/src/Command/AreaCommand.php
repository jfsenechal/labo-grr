<?php

namespace Devome\Grr\Command;

use Devome\Grr\Repository\GrrAreaRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'grr:area',
    description: 'Liste les domaines',
)]
class AreaCommand extends Command
{
    private SymfonyStyle $io;
    private OutputInterface $output;

    public function __construct(
        private GrrAreaRepository $grrAreaRepository,
        string $name = null
    ) {
        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this->addOption('all', "all", InputOption::VALUE_NONE, 'Tous les domaines');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->output = $output;
        $this->io = new SymfonyStyle($input, $output);

        foreach ($this->grrAreaRepository->findAll() as $area) {
            $this->io->writeln($area->areaName);
        }

        return Command::SUCCESS;
    }


}
