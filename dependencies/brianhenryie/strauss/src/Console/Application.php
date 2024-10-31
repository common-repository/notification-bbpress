<?php

namespace BracketSpace\Notification\bbPress\Dependencies\BrianHenryIE\Strauss\Console;

use BracketSpace\Notification\bbPress\Dependencies\BrianHenryIE\Strauss\Console\Commands\Compose;
use BracketSpace\Notification\bbPress\Dependencies\Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * @param string $version
     */
    public function __construct(string $version)
    {
        parent::__construct('strauss', $version);

        $composeCommand = new Compose();
        $this->add($composeCommand);

        $this->setDefaultCommand('compose');
    }
}
