<?php

namespace BlankFramework\WebExceptions\ServerException;

use BlankFramework\WebExceptions\WebException;

class GatewayTimeoutException extends WebException
{
    public function __construct(
        string $message = 'Gateway timed out',
    ) {
        parent::__construct(
            'Gateway timeout',
            $message,
            'about:blank',
            504
        );
    }
}
