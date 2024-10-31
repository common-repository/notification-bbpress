<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Scalar\MagicConst;

use BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Scalar\MagicConst;

class Method extends MagicConst {
    public function getName(): string {
        return '__METHOD__';
    }

    public function getType(): string {
        return 'Scalar_MagicConst_Method';
    }
}