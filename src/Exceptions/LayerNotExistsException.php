<?php
namespace Binaper\CakeObject\Exceptions;

use Throwable;

/**
 * Class PutNotObjectException
 * @package Binaper\CakeObject\Exceptions
 */
class LayerNotExistsException extends \Exception
{
    public function __construct($message = 'Specified layer not exists', $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
