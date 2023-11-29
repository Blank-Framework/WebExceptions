<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

class NotAcceptableException extends WebException
{
    public function __construct(
        string $message = 'Unacceptable response',
    ) {
        parent::__construct(
            'Not Acceptable',
            $message,
            'about:blank',
            406
        );
    }
}
