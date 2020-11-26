<?php

/*
 * This file is part of the "elao/enum" package.
 *
 * Copyright (C) Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\Enum\Tests\Fixtures\Enum;

use Elao\Enum\FlaggedEnum;

final class InvalidFlagsEnum extends FlaggedEnum
{
    public const FIRST = 1;
    public const SECOND = 2;
    public const INVALID = 3;

    public static function readables(): array
    {
        return [
            static::FIRST => 'First',
            static::SECOND => 'Second',
            static::INVALID => 'Invalid',
        ];
    }

    public static function values(): array
    {
        return [
            static::FIRST,
            static::SECOND,
            static::INVALID,
        ];
    }
}
