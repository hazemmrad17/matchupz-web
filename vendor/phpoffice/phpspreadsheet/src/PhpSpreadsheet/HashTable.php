<?php

namespace PhpOffice\PhpSpreadsheet;

/**
 * @template T of IComparable
 */
class HashTable
{
    /**
     * HashTable elements.
     *
     * @var array<string, T>
     */
<<<<<<< HEAD
    protected $items = [];
=======
    protected array $items = [];
>>>>>>> match

    /**
     * HashTable key map.
     *
     * @var array<int, string>
     */
<<<<<<< HEAD
    protected $keyMap = [];
=======
    protected array $keyMap = [];
>>>>>>> match

    /**
     * Create a new HashTable.
     *
     * @param T[] $source Optional source array to create HashTable from
     */
<<<<<<< HEAD
    public function __construct($source = null)
=======
    public function __construct(?array $source = [])
>>>>>>> match
    {
        if ($source !== null) {
            // Create HashTable
            $this->addFromSource($source);
        }
    }

    /**
     * Add HashTable items from source.
     *
     * @param T[] $source Source array to create HashTable from
     */
    public function addFromSource(?array $source = null): void
    {
        // Check if an array was passed
        if ($source === null) {
            return;
        }

        foreach ($source as $item) {
            $this->add($item);
        }
    }

    /**
     * Add HashTable item.
     *
     * @param T $source Item to add
     */
    public function add(IComparable $source): void
    {
        $hash = $source->getHashCode();
        if (!isset($this->items[$hash])) {
            $this->items[$hash] = $source;
            $this->keyMap[count($this->items) - 1] = $hash;
        }
    }

    /**
     * Remove HashTable item.
     *
     * @param T $source Item to remove
     */
    public function remove(IComparable $source): void
    {
        $hash = $source->getHashCode();
        if (isset($this->items[$hash])) {
            unset($this->items[$hash]);

            $deleteKey = -1;
            foreach ($this->keyMap as $key => $value) {
                if ($deleteKey >= 0) {
                    $this->keyMap[$key - 1] = $value;
                }

                if ($value == $hash) {
                    $deleteKey = $key;
                }
            }
            unset($this->keyMap[count($this->keyMap) - 1]);
        }
    }

    /**
     * Clear HashTable.
     */
    public function clear(): void
    {
        $this->items = [];
        $this->keyMap = [];
    }

    /**
     * Count.
<<<<<<< HEAD
     *
     * @return int
     */
    public function count()
=======
     */
    public function count(): int
>>>>>>> match
    {
        return count($this->items);
    }

    /**
     * Get index for hash code.
<<<<<<< HEAD
     *
     * @return false|int Index
     */
    public function getIndexForHashCode(string $hashCode)
    {
        // Scrutinizer thinks the following could return string. It is wrong.
=======
     */
    public function getIndexForHashCode(string $hashCode): false|int
    {
>>>>>>> match
        return array_search($hashCode, $this->keyMap, true);
    }

    /**
     * Get by index.
     *
     * @return null|T
     */
<<<<<<< HEAD
    public function getByIndex(int $index)
=======
    public function getByIndex(int $index): ?IComparable
>>>>>>> match
    {
        if (isset($this->keyMap[$index])) {
            return $this->getByHashCode($this->keyMap[$index]);
        }

        return null;
    }

    /**
     * Get by hashcode.
     *
     * @return null|T
     */
<<<<<<< HEAD
    public function getByHashCode(string $hashCode)
=======
    public function getByHashCode(string $hashCode): ?IComparable
>>>>>>> match
    {
        if (isset($this->items[$hashCode])) {
            return $this->items[$hashCode];
        }

        return null;
    }

    /**
     * HashTable to array.
     *
     * @return T[]
     */
<<<<<<< HEAD
    public function toArray()
=======
    public function toArray(): array
>>>>>>> match
    {
        return $this->items;
    }

    /**
     * Implement PHP __clone to create a deep clone, not just a shallow copy.
     */
    public function __clone()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => $value) {
            // each member of this class is an array
            if (is_array($value)) {
                $array1 = $value;
                foreach ($array1 as $key1 => $value1) {
                    if (is_object($value1)) {
                        $array1[$key1] = clone $value1;
                    }
                }
                $this->$key = $array1;
            }
        }
    }
}
