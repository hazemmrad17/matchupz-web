<?php

namespace PhpOffice\PhpSpreadsheet\Calculation\Engine;

class CyclicReferenceStack
{
    /**
     * The call stack for calculated cells.
     *
     * @var mixed[]
     */
<<<<<<< HEAD
    private $stack = [];

    /**
     * Return the number of entries on the stack.
     *
     * @return int
     */
    public function count()
=======
    private array $stack = [];

    /**
     * Return the number of entries on the stack.
     */
    public function count(): int
>>>>>>> match
    {
        return count($this->stack);
    }

    /**
     * Push a new entry onto the stack.
<<<<<<< HEAD
     *
     * @param mixed $value
     */
    public function push($value): void
=======
     */
    public function push(mixed $value): void
>>>>>>> match
    {
        $this->stack[$value] = $value;
    }

    /**
     * Pop the last entry from the stack.
<<<<<<< HEAD
     *
     * @return mixed
     */
    public function pop()
=======
     */
    public function pop(): mixed
>>>>>>> match
    {
        return array_pop($this->stack);
    }

    /**
     * Test to see if a specified entry exists on the stack.
     *
     * @param mixed $value The value to test
<<<<<<< HEAD
     *
     * @return bool
     */
    public function onStack($value)
=======
     */
    public function onStack(mixed $value): bool
>>>>>>> match
    {
        return isset($this->stack[$value]);
    }

    /**
     * Clear the stack.
     */
    public function clear(): void
    {
        $this->stack = [];
    }

    /**
     * Return an array of all entries on the stack.
     *
     * @return mixed[]
     */
<<<<<<< HEAD
    public function showStack()
=======
    public function showStack(): array
>>>>>>> match
    {
        return $this->stack;
    }
}
