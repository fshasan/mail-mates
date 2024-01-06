<?php

namespace App\Enums;

interface MessageType
{
    const INBOX = 1;
    const DRAFTS = 2;
    const SENT = 3;

    const MESSAGE_TYPES = [
        self::INBOX,
        self::DRAFTS,
        self::SENT,
    ];
    const MESSAGE_TYPES_WITH_LABEL = [
        self::INBOX => 'Inbox',
        self::DRAFTS => 'Drafts',
        self::SENT => 'Sent',
    ];

}