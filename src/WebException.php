<?php

namespace BlankFramework\WebExceptions;

class WebException extends \Exception
{
    public function __construct(
        private readonly string $title = '',
        private readonly string $description = '',
        private readonly string $type = '',
        private readonly int $httpStatusCode = 500,
    ) {
        parent::__construct($description);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->getMessage();
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }
}
