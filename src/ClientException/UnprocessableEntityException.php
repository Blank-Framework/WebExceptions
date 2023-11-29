<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

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
