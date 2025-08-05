<?php

declare(strict_types=1);

namespace Maartenpaauw\Slack\Constants\Concerns;

use ReflectionAttribute;
use ReflectionEnumBackedCase;

/**
 * @internal
 */
trait SupportsAttributes
{
    /**
     * @template T
     *
     * @param class-string<T> $class
     */
    private function hasAttribute(string $class): bool
    {
        $reflection = new ReflectionEnumBackedCase(class: self::class, constant: $this->name);
        $attributes = $reflection->getAttributes();

        return array_any(
            array: $attributes,
            callback: static fn (ReflectionAttribute $attribute): bool => $attribute->newInstance() instanceof $class,
        );
    }
}
