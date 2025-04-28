<?php

namespace PhpOffice\PhpSpreadsheet\Collection\Memory;

<<<<<<< HEAD
use DateInterval;
=======
>>>>>>> match
use Psr\SimpleCache\CacheInterface;

/**
 * This is the default implementation for in-memory cell collection.
 *
<<<<<<< HEAD
 * Alternatives implementation should leverage off-memory, non-volatile storage
 * to reduce overall memory usage.
=======
 * Alternative implementation should leverage off-memory, non-volatile storage
 * to reduce overall memory usage.
 *
 * Either SimpleCache1 or SimpleCache3, but not both, may be used.
 * For code coverage testing, it will always be SimpleCache3.
 *
 * @codeCoverageIgnore
>>>>>>> match
 */
class SimpleCache1 implements CacheInterface
{
    /**
     * @var array Cell Cache
     */
<<<<<<< HEAD
    private $cache = [];

    /**
     * @return bool
     */
    public function clear()
=======
    private array $cache = [];

    public function clear(): bool
>>>>>>> match
    {
        $this->cache = [];

        return true;
    }

<<<<<<< HEAD
    /**
     * @param string $key
     *
     * @return bool
     */
    public function delete($key)
=======
    public function delete($key): bool
>>>>>>> match
    {
        unset($this->cache[$key]);

        return true;
    }

<<<<<<< HEAD
    /**
     * @param iterable $keys
     *
     * @return bool
     */
    public function deleteMultiple($keys)
=======
    public function deleteMultiple($keys): bool
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
     *
     * @return mixed
     */
    public function get($key, $default = null)
=======
    public function get($key, $default = null): mixed
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
     *
     * @return iterable
     */
    public function getMultiple($keys, $default = null)
=======
    public function getMultiple($keys, $default = null): iterable
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
     *
     * @return bool
     */
    public function has($key)
=======
    public function has($key): bool
>>>>>>> match
    {
        return array_key_exists($key, $this->cache);
    }

<<<<<<< HEAD
    /**
     * @param string                 $key
     * @param mixed                  $value
     * @param null|DateInterval|int $ttl
     *
     * @return bool
     */
    public function set($key, $value, $ttl = null)
=======
    public function set($key, $value, $ttl = null): bool
>>>>>>> match
    {
        $this->cache[$key] = $value;

        return true;
    }

<<<<<<< HEAD
    /**
     * @param iterable               $values
     * @param null|DateInterval|int $ttl
     *
     * @return bool
     */
    public function setMultiple($values, $ttl = null)
=======
    public function setMultiple($values, $ttl = null): bool
>>>>>>> match
    {
        foreach ($values as $key => $value) {
            $this->set($key, $value);
        }

        return true;
    }
}
