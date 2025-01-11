<?php

declare(strict_types=1);

namespace Maginium\Foundation\Console;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\VarDumper\Command\ServerDumpCommand as SymfonyServerDumpCommand;

/**
 * Server dump command.
 */
#[AsCommand(name: 'server:dump', description: 'Start a dump server that collects and displays dumps in a single place')]
class ServerDumpCommand extends SymfonyServerDumpCommand
{
}
