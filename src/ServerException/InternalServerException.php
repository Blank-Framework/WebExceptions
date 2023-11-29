<?php

namespace BlankFramework\WebExceptions\ServerException;

use BlankFramework\WebExceptions\WebException;

class InternalServerException extends WebException
{
    public function __construct(
        string $message = 'An internal server error has occurred',
    ) {
        parent::__construct(
            'Internal Server Error',
            $message,
            'about:blank',
        );
    }
}
