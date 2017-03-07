<?php

namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class GenerateConfigCommand extends Command
{
    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('nginx')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a config file for nginx.')
        // configure an argument
        ->addOption('bind_domain', null, InputOption::VALUE_REQUIRED, 'Bind domain which nginx read from adress string browsers')
        // configure an argument
        ->addOption('proxy_domain', null, InputOption::VALUE_REQUIRED, 'The proxy_domain. For X port. Can be 127.0.0.1:8000')
        ->addOption('output_file', null, InputOption::VALUE_REQUIRED, 'File where to store resulting config.')
        ->addOption('template_file', null, InputOption::VALUE_OPTIONAL, 'File where to take template', 'template.conf')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $variables = array(
            'bind_domain',
            'proxy_domain'
        );
        $config = file_get_contents($input->getOption('template_file'));

        foreach ($variables as $var) {
            $config = str_replace(
                '$' . $var . '$', 
                $input->getOption($var), 
                $config
            ); 
        }

        $fp = fopen($input->getOption('output_file'), "w+"); // Открываем файл в режиме записи
        $writeResult = fwrite($fp, $config); // Запись в файл
        if ($writeResult) {
            $output->writeln(sprintf("<bg=green>\n\n File '%s' was created successfully.\n</>", $input->getOption('output_file')));
        } else {
            $output->writeln(sprintf('<error>File "%s" was not created successfully.</error>', $input->getOption('output_file')));
        }
        fclose($fp); //Закрытие файла
              
    }
}