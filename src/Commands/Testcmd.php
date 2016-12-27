<?php
/**
 * Created by PhpStorm.
 * User: wujunwei
 * Date: 2016/12/27
 * Time: 11:12
 */

namespace Wujunwei928\SpiderMan\Mycmd;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class TestCmd extends Command
{
    public function __construct($msg)
    {
        $this->msg = $msg;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('test')
            ->setDescription('symfony console test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<comment>".$this->msg."</comment>");

        // green text
        $output->writeln('<info>foo</info>');

        // yellow text
        $output->writeln('<comment>foo</comment>');

        // black text on a cyan background
        $output->writeln('<question>foo</question>');

        // white text on a red background
        $output->writeln('<error>foo</error>');

        $style = new OutputFormatterStyle('red', 'yellow', array('bold', 'blink'));
        $output->getFormatter()->setStyle('fire', $style);

        $output->writeln('<fire>foo</fire>');

        // green text
        $output->writeln('<fg=green>foo</>');

// black text on a cyan background
        $output->writeln('<fg=black;bg=cyan>foo</>');

// bold text on a yellow background
        $output->writeln('<bg=yellow;options=bold>foo</>');

// bold text with underscore
        $output->writeln('<options=bold,underscore>foo</>');
    }
}