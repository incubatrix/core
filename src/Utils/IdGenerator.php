<?php

declare(strict_types=1);

namespace Incubatrix\Core\Utils;

use Symfony\Component\Uid\Uuid;

final readonly class IdGenerator
{
    public static function id(): string
    {
        return Uuid::v7()->toRfc4122();
    }
}
