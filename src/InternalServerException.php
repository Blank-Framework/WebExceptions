<?php

namespace BlankFramework\WebExceptions;

class InternalServerException extends WebException
{
    public function __construct()
    {
        parent::__construct(
            'Internal Server Error',
            'An internal server error has occurred',
            'about:blank',
        );
    }
}
