<?php
/**
 * @license BSD-3-Clause
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */ declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Stmt;

use BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node;

class ElseIf_ extends Node\Stmt {
    /** @var Node\Expr Condition */
    public Node\Expr $cond;
    /** @var Node\Stmt[] Statements */
    public array $stmts;

    /**
     * Constructs an elseif node.
     *
     * @param Node\Expr $cond Condition
     * @param Node\Stmt[] $stmts Statements
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct(Node\Expr $cond, array $stmts = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->cond = $cond;
        $this->stmts = $stmts;
    }

    public function getSubNodeNames(): array {
        return ['cond', 'stmts'];
    }

    public function getType(): string {
        return 'Stmt_ElseIf';
    }
}