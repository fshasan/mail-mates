<?php

namespace App\Enums;

interface MessageType
{
    const INBOX = 1;
    const DRAFT = 2;
    const SENT = 3;

    const MESSAGE_TYPES = [
        self::INBOX,
        self::DRAFT,
        self::SENT,
    ];
    const MESSAGE_TYPES_WITH_LABEL = [
        self::INBOX => 'Inbox',
        self::DRAFT => 'Draft',
        self::SENT => 'Sent',
    ];

}