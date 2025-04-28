<?php

namespace PhpOffice\PhpSpreadsheet\Collection\Memory;

use DateInterval;
use Psr\SimpleCache\CacheInterface;

/**
 * This is the default implementation for in-memory cell collection.
 *
<<<<<<< HEAD
 * Alternatives implementation should leverage off-memory, non-volatile storage
=======
 * Alternative implementation should leverage off-memory, non-volatile storage
>>>>>>> match
 * to reduce overall memory usage.
 */
class SimpleCache3 implements CacheInterface
{
<<<<<<< HEAD
    /**
     * @var array Cell Cache
     */
    private $cache = [];
=======
    private array $cache = [];
>>>>>>> match

    public function clear(): bool
    {
        $this->cache = [];

        return true;
    }

<<<<<<< HEAD
    /**
     * @param string $key
     */
    public function delete($key): bool
=======
    public function delete(string $key): bool
>>>>>>> match
    {
        unset($this->cache[$key]);

        return true;
    }

<<<<<<< HEAD
    /**
     * @param iterable $keys
     */
    public function deleteMultiple($keys): bool
=======
    public function deleteMultiple(iterable $keys): bool
>>>>>>> match
    {
        foreach ($keys as $key) {
            $this->delete($key);
        }

        return true;
    }

<<<<<<< HEAD
    /**
     * @param string $key
     * @param mixed  $default
     */
    public function get($key, $default = null): mixed
=======
    public function get(string $key, mixed $default = null): mixed
>>>>>>> match
    {
        if ($this->has($key)) {
            return $this->cache[$key];
        }

        return $default;
    }

<<<<<<< HEAD
    /**
     * @param iterable $keys
     * @param mixed    $default
     */
    public function getMultiple($keys, $default = null): iterable
=======
    public function getMultiple(iterable $keys, mixed $default = null): iterable
>>>>>>> match
    {
        $results = [];
        foreach ($keys as $key) {
            $results[$key] = $this->get($key, $default);
        }

        return $results;
    }

<<<<<<< HEAD
    /**
     * @param string $key
     */
    public function has($key): bool
=======
    public function has(string $key): bool
>>>>>>> match
    {
        return array_key_exists($key, $this->cache);
    }

<<<<<<< HEAD
    /**
     * @param string                 $key
     * @param mixed                  $value
     * @param null|DateInterval|int $ttl
     */
    public function set($key, $value, $ttl = null): bool
=======
    public function set(string $key, mixed $value, null|int|DateInterval $ttl = null): bool
>>>>>>> match
    {
        $this->cache[$key] = $value;

        return true;
    }

<<<<<<< HEAD
    /**
     * @param iterable               $values
     * @param null|DateInterval|int $ttl
     */
    public function setMultiple($values, $ttl = null): bool
=======
    public function setMultiple(iterable $values, null|int|DateInterval $ttl = null): bool
>>>>>>> match
    {
        foreach ($values as $key => $value) {
            $this->set($key, $value);
        }

        return true;
    }
}
