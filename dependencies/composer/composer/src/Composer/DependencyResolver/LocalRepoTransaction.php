<?php
/**
 * @license MIT
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BracketSpace\Notification\bbPress\Dependencies\Composer\DependencyResolver;

use BracketSpace\Notification\bbPress\Dependencies\Composer\Repository\InstalledRepositoryInterface;
use BracketSpace\Notification\bbPress\Dependencies\Composer\Repository\RepositoryInterface;

/**
 * @author Nils Adermann <naderman@naderman.de>
 * @internal
 */
class LocalRepoTransaction extends Transaction
{
    public function __construct(RepositoryInterface $lockedRepository, InstalledRepositoryInterface $localRepository)
    {
        parent::__construct(
            $localRepository->getPackages(),
            $lockedRepository->getPackages()
        );
    }
}
