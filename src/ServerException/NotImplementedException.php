<?php

namespace BlankFramework\WebExceptions\ServerException;

use BlankFramework\WebExceptions\WebException;

class NotImplementedException extends WebException
{
    public function __construct(
        string $message = 'The requested resource is not implemented',
    ) {
        parent::__construct(
            'Not Implemented',
            $message,
            'about:blank',
            501,
        );
    }
}
