<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

class BadRequestException extends WebException
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
