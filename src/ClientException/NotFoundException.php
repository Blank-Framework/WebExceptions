<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

class NotFoundException extends WebException
{
    public function __construct(
        string $message = 'Requested resource could not be found',
    ) {
        parent::__construct(
            'Not Found',
            $message,
            'about:blank',
            404,
        );
    }
}
