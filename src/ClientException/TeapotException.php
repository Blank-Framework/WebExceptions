<?php

namespace BlankFramework\WebExceptions\ClientException;

use BlankFramework\WebExceptions\WebException;

/**
 * This class or exception is only included for a bit of fun. Use at your own discretion
 */
class TeapotException extends WebException
{
    public function __construct()
    {
        parent::__construct(
            'I\'m a teapot',
            'I\'m a teapot',
            'about:blank',
            418,
        );
    }
}
