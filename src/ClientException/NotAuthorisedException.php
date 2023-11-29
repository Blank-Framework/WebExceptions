<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

class NotAuthorisedException extends WebException
{
    public function __construct(
        string $message = 'Not authorised to access the requested resource',
    ) {
        parent::__construct(
            'Not Authorised',
            $message,
            'about:blank',
            401,
        );
    }
}
