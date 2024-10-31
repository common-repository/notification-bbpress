<?php
/**
 * @license MIT
 *
 * Modified by notification on 02-October-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Dependencies\JsonMapper\Parser;

use BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node;
use BracketSpace\Notification\bbPress\Dependencies\PhpParser\NodeVisitorAbstract;
use BracketSpace\Notification\bbPress\Dependencies\PhpParser\Node\Stmt;

class UseNodeVisitor extends NodeVisitorAbstract
{
    /** @var Import[] */
    private $imports = [];

    /**
     * @return null
     */
    public function enterNode(Node $node)
    {
        if ($node instanceof Stmt\Use_) {
            foreach ($node->uses as $use) {
                $this->imports[] = new Import($use->name->toString(), \is_null($use->alias) ? null : $use->alias->name);
            }
        } elseif ($node instanceof Stmt\GroupUse) {
            foreach ($node->uses as $use) {
                $this->imports[] = new Import(
                    "{$node->prefix}\\{$use->name}",
                    \is_null($use->alias) ? null : $use->alias->name
                );
            }
        }

        return null;
    }

    /** @return Import[] */
    public function getImports(): array
    {
        return $this->imports;
    }
}
