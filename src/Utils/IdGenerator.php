<?php

declare(strict_types=1);

namespace Incubatrix\Core\Utils;

use Random\RandomException;
use Symfony\Component\Uid\Uuid;

final readonly class IdGenerator
{
    public static function id(): string
    {
        return Uuid::v7()->toRfc4122();
    }

    /**
     * @throws RandomException
     */
    public static function token(): string
    {
        return bin2hex(random_bytes(32));
    }
}
