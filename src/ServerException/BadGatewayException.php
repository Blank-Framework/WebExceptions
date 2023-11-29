<?php

namespace BlankFramework\WebExceptions\ServerException;

use BlankFramework\WebExceptions\WebException;

class BadGatewayException extends WebException
{
    public function __construct(
        string $message = 'Could not relay request to upstream server',
    ) {
        parent::__construct(
            'Bad Gateway',
            $message,
            'about:blank',
            502
        );
    }
}
