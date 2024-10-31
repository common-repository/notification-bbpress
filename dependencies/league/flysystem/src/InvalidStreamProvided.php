<?php
/**
 * @license MIT
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Dependencies\League\Flysystem;

use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidStreamProvided extends BaseInvalidArgumentException implements FilesystemException
{
}
