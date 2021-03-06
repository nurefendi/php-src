<?php

/** @generate-function-entries */

class ArrayObject implements IteratorAggregate, ArrayAccess, Serializable, Countable
{
    public function __construct(array|object $input = [], int $flags = 0, string $iterator_class = ArrayIterator::class) {}

    /**
     * @param string|int $index
     * @return bool
     */
    public function offsetExists($index) {}

    /**
     * @param string|int $index
     * @return mixed
     */
    public function offsetGet($index) {}

    /**
     * @param string|int $index
     * @return void
     */
    public function offsetSet($index, mixed $value) {}

    /**
     * @param string|int $index
     * @return void
     */
    public function offsetUnset($index) {}

    /** @return void */
    public function append(mixed $value) {}

    /** @return array */
    public function getArrayCopy() {}

    /** @return int */
    public function count() {}

    /** @return int */
    public function getFlags() {}

    /** @return void */
    public function setFlags(int $flags) {}

    /** @return bool */
    public function asort(int $sort_flags = SORT_REGULAR) {}

    /** @return bool */
    public function ksort(int $sort_flags = SORT_REGULAR) {}

    /** @return bool */
    public function uasort(callable $cmp_function) {}

    /** @return bool */
    public function uksort(callable $cmp_function) {}

    /** @return bool */
    public function natsort() {}

    /** @return bool */
    public function natcasesort() {}

    /** @return void */
    public function unserialize(string $serialized) {}

    /** @return string */
    public function serialize() {}

    /** @return array */
    public function __serialize() {}

    /** @return void */
    public function __unserialize(array $data) {}

    /** @return Iterator */
    public function getIterator() {}

    /** @return array|null */
    public function exchangeArray(array|object $input) {}

    /** @return void */
    public function setIteratorClass(string $iteratorClass) {}

    /** @return string */
    public function getIteratorClass() {}

    /** @return array */
    public function __debugInfo() {}
}

class ArrayIterator implements SeekableIterator, ArrayAccess, Serializable, Countable
{
    public function __construct(array|object $array = [], int $flags = 0) {}

    /**
     * @param string|int $index
     * @return bool
     * @alias ArrayObject::offsetExists
     */
    public function offsetExists($index) {}

    /**
     * @param string|int $index
     * @return mixed
     * @alias ArrayObject::offsetGet
     */
    public function offsetGet($index) {}

    /**
     * @param string|int $index
     * @return void
     * @alias ArrayObject::offsetSet
     */
    public function offsetSet($index, mixed $value) {}

    /**
     * @param string|int $index
     * @return void
     * @alias ArrayObject::offsetUnset
     */
    public function offsetUnset($index) {}

    /**
     * @return void
     * @alias ArrayObject::append
     */
    public function append(mixed $value) {}

    /**
     * @return array
     * @alias ArrayObject::getArrayCopy
     */
    public function getArrayCopy() {}

    /**
     * @return int
     * @alias ArrayObject::count
     */
    public function count() {}

    /**
     * @return int
     * @alias ArrayObject::getFlags
     */
    public function getFlags() {}

    /**
     * @return void
     * @alias ArrayObject::setFlags
     */
    public function setFlags(int $flags) {}

    /**
     * @return bool
     * @alias ArrayObject::asort
     */
    public function asort(int $sort_flags = SORT_REGULAR) {}

    /**
     * @return bool
     * @alias ArrayObject::ksort
     */
    public function ksort(int $sort_flags = SORT_REGULAR) {}

    /**
     * @return bool
     * @alias ArrayObject::uasort
     */
    public function uasort(callable $cmp_function) {}

    /**
     * @return bool
     * @alias ArrayObject::uksort
     */
    public function uksort(callable $cmp_function) {}

    /**
     * @return bool
     * @alias ArrayObject::natsort
     */
    public function natsort() {}

    /**
     * @return bool
     * @alias ArrayObject::natcasesort
     */
    public function natcasesort() {}

    /**
     * @return void
     * @alias ArrayObject::unserialize
     */
    public function unserialize(string $serialized) {}

    /**
     * @return string
     * @alias ArrayObject::serialize
     */
    public function serialize() {}

    /**
     * @return array
     * @alias ArrayObject::__serialize
     */
    public function __serialize() {}

    /**
     * @return void
     * @alias ArrayObject::__unserialize
     */
    public function __unserialize(array $data) {}

    /** @return void */
    public function rewind() {}

    /** @return mixed */
    public function current() {}

    /** @return mixed */
    public function key() {}

    /** @return void */
    public function next() {}

    /** @return bool */
    public function valid() {}

    /** @return void */
    public function seek(int $position) {}

    /**
     * @return array
     * @alias ArrayObject::__debugInfo
     */
    public function __debugInfo() {}
}

class RecursiveArrayIterator extends ArrayIterator implements RecursiveIterator
{
    /** @return bool */
    public function hasChildren() {}

    /** @return RecursiveArrayIterator|null */
    public function getChildren() {}
}
