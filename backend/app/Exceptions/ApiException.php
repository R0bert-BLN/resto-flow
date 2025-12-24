<?php

namespace App\Exceptions;

use Exception;
use ReflectionClass;

class ApiException extends Exception
{
    protected int $httpStatusCode;

    public function __construct(string $message, int $httpStatusCode)
    {
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
    }

    public function __toString(): string
    {
        $className = (new ReflectionClass($this))->getShortName();
        $className = str_replace('Exception', '', $className);

        return strtoupper(
            preg_replace('/(?<!^)[A-Z]/', '_$0', $className)
        );
    }

    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }
}
