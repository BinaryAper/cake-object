<?php
namespace Binaper\CakeObject\Exceptions;

use Throwable;

/**
 * Class PutNotObjectException
 * @package Binaper\CakeObject\Exceptions
 */
class PutNotObjectException extends \Exception
{
    public function __construct($message = 'Trying put not object value!', $code = 422, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
