<?php
/**
 * @license MIT
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace BracketSpace\Notification\bbPress\Dependencies\JsonMapper\Cache;

use BracketSpace\Notification\bbPress\Dependencies\Psr\SimpleCache\CacheInterface;
use BracketSpace\Notification\bbPress\Dependencies\Symfony\Component\Cache\Adapter\ArrayAdapter;
use BracketSpace\Notification\bbPress\Dependencies\Symfony\Component\Cache\Psr16Cache;

class ArrayCache extends Psr16Cache implements CacheInterface
{
    public function __construct()
    {
        parent::__construct(new ArrayAdapter());
    }
}
