<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Expr\Cast;

use BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Expr\Cast;

class Array_ extends Cast {
    public function getType(): string {
        return 'Expr_Cast_Array';
    }
}
