<?php

namespace BlankFramework\WebExceptions\ServerException;

use BlankFramework\WebExceptions\WebException;

class ServiceUnavailableException extends WebException
{
    public function __construct(
        string $message = 'Service currently unavailable',
    ) {
        parent::__construct(
            'Service Unavailable',
            $message,
            'about:blank',
            503
        );
    }
}
