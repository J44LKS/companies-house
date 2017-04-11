<?php
declare(strict_types=1);

namespace philwc;

use philwc\Entity\EntityInterface;
use Ds\Vector;

/**
 * Class EntityCollection
 * @package philwc
 */
class EntityCollection implements \IteratorAggregate, \ArrayAccess
{
    private $collection;

    /**
     * EntityCollection constructor.
     */
    public function __construct()
    {
        $this->collection = new Vector();
    }

    /**
     * @param EntityCollection $collection
     */
    public function merge(EntityCollection $collection)
    {
        foreach ($collection as $item) {
            $this->add($item);
        }
    }

    /**
     * @param EntityInterface $entity
     */
    public function add(EntityInterface $entity)
    {
        $this->collection->push($entity);
    }

    /**
     * @return Vector
     */
    public function all()
    {
        return $this->collection;
    }

    /**
     * @return EntityInterface
     */
    public function last(): EntityInterface
    {
        return $this->collection->last();
    }

    /**
     * @return EntityInterface
     */
    public function first(): EntityInterface
    {
        return $this->collection->first();
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return $this->collection->offsetExists($offset);
    }

    /**
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset): EntityInterface
    {
        return $this->collection->offsetGet($offset);
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->collection->offsetSet($offset, $value);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        $this->collection->offsetUnset($offset);
    }

    /**
     * @return \Generator
     */
    public function getIterator()
    {
        foreach ($this->collection->toArray() as $value) {
            yield $value;
        }
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->collection->count();
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->collection, $name], $arguments);
    }
}
