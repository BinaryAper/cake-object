<?php

namespace Binaper\CakeObject;

use Binaper\CakeObject\Exceptions\LayerNotExistsException;
use Binaper\CakeObject\Exceptions\PutNotObjectException;

/**
 * Class CakeObject
 *
 * @package Binaper\CakeObject
 */
class CakeObject
{
    /**
     * List of properties that will be in final object
     * @var array
     */
    protected $propertyList;

    /**
     * Upper limit of layer that can be in cake object
     * @var int
     */
    protected $layerLimit;

    /**
     * @var array
     */
    protected $layers = [];

    /**
     * @var int
     */
    protected $lastInsertPosition = 0;

    /**
     * CakeObject constructor.
     * @param array $propertyList
     * @param int|null $layerLimit
     */
    public function __construct(array $propertyList = [], int $layerLimit = null)
    {
        $this->propertyList = $propertyList;

        $this->layerLimit = $layerLimit;
    }

    /**
     * @param object $object
     * @param int|null $position
     * @throws PutNotObjectException
     * @return bool
     */
    public function addLayer($object, int $position = null): bool
    {
        if (!is_object($object)) {
            throw new PutNotObjectException('You trying put not object value!');
        }

        // Set object to specified position
        if ($position !== null) {
            $this->layers[$position] = $object;

            return true;
        }

        $this->layers[] = $object;

        $this->lastInsertPosition = array_key_last($this->layers);

        return true;
    }

    /**
     * @param int $position
     * @return bool
     * @throws LayerNotExistsException
     */
    public function removeLayer(int $position): bool
    {
        if (!array_key_exists($position, $this->layers)) {
            throw new LayerNotExistsException();
        }

        unset($this->layers[$position]);

        return true;
    }

    /**
     * @return int
     */
    public function getLastInsertPosition(): int
    {
        return $this->lastInsertPosition;
    }
}
