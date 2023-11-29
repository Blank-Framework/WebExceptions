<?php

namespace BlankFramework\WebExceptions;

class UnprocessableEntityException extends WebException
{
    public function __construct(
        string $message = 'Invalid request sent to the server',
    ) {
        parent::__construct(
            'Unprocessable Entity',
            $message,
            'about:blank',
            422,
        );
    }
}
