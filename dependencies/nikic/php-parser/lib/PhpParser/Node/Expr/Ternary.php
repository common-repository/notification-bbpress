<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Expr;

use BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Expr;

class Ternary extends Expr {
    /** @var Expr Condition */
    public Expr $cond;
    /** @var null|Expr Expression for true */
    public ?Expr $if;
    /** @var Expr Expression for false */
    public Expr $else;

    /**
     * Constructs a ternary operator node.
     *
     * @param Expr $cond Condition
     * @param null|Expr $if Expression for true
     * @param Expr $else Expression for false
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct(Expr $cond, ?Expr $if, Expr $else, array $attributes = []) {
        $this->attributes = $attributes;
        $this->cond = $cond;
        $this->if = $if;
        $this->else = $else;
    }

    public function getSubNodeNames(): array {
        return ['cond', 'if', 'else'];
    }

    public function getType(): string {
        return 'Expr_Ternary';
    }
}
