<?php

namespace BlankFramework\WebExceptions;

class BadRequestException
{
    public function __construct(
        string $message = 'Bad request sent to the server',
    ) {
        parent::__construct(
            'Bad Request',
            $message,
            'about:blank',
            400,
        );
    }
}
