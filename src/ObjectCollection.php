<?php

namespace Binaper\CakeObject;

use Binaper\CakeObject\Exceptions\PutNotObjectException;

/**
 * Class ObjectCollection
 * @package Binaper\CakeObject
 */
class ObjectCollection
{
    /**
     * @var int
     */
    private $limit;

    /**
     * @var array
     */
    private $objects = [];

    /**
     * @var int
     */
    private $lastInsertKey = 0;

    /**
     * ObjectCollection constructor.
     * @param int $limit
     */
    public function __construct(int $limit = 0)
    {
        $this->limit = $limit;
    }

    public function put($object)
    {
        if (!is_object($object)) {
            throw new PutNotObjectException('You trying put not object value!');
        }

        $this->objects[] = $object;

        $this->lastInsertKey = array_key_last($this->objects);
    }
}
