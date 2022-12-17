<?php

namespace App\Enums;

interface EmailType
{
    const PRIMARY = 1;
    const SOCIAL = 2;
    const PROMOTIONAL = 3;
    const FORUM = 4;

    const EMAIL_TYPES = [
        self::PRIMARY,
        self::SOCIAL,
        self::PROMOTIONAL,
        self::FORUM,
    ];
    const EMAIL_TYPES_WITH_LABEL = [
        self::PRIMARY => 'Primary',
        self::SOCIAL => 'Social',
        self::PROMOTIONAL => 'Promotinal',
        self::FORUM => 'Forum',
    ];

}