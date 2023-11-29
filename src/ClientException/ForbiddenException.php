<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

class ForbiddenException extends WebException
{
    public function __construct(
        string $message = 'Access to the requested resource has been forbidden',
    ) {
        parent::__construct(
            'Forbidden',
            $message,
            'about:blank',
            403
        );
    }
}
