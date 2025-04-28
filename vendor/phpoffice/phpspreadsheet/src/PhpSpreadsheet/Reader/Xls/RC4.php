<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Xls;

class RC4
{
    /** @var int[] */
<<<<<<< HEAD
    protected $s = []; // Context

    /** @var int */
    protected $i = 0;

    /** @var int */
    protected $j = 0;
=======
    protected array $s = []; // Context

    protected int $i = 0;

    protected int $j = 0;
>>>>>>> match

    /**
     * RC4 stream decryption/encryption constrcutor.
     *
     * @param string $key Encryption key/passphrase
     */
<<<<<<< HEAD
    public function __construct($key)
=======
    public function __construct(string $key)
>>>>>>> match
    {
        $len = strlen($key);

        for ($this->i = 0; $this->i < 256; ++$this->i) {
            $this->s[$this->i] = $this->i;
        }

        $this->j = 0;
        for ($this->i = 0; $this->i < 256; ++$this->i) {
            $this->j = ($this->j + $this->s[$this->i] + ord($key[$this->i % $len])) % 256;
            $t = $this->s[$this->i];
            $this->s[$this->i] = $this->s[$this->j];
            $this->s[$this->j] = $t;
        }
        $this->i = $this->j = 0;
    }

    /**
     * Symmetric decryption/encryption function.
     *
     * @param string $data Data to encrypt/decrypt
<<<<<<< HEAD
     *
     * @return string
     */
    public function RC4($data)
=======
     */
    public function RC4(string $data): string
>>>>>>> match
    {
        $len = strlen($data);
        for ($c = 0; $c < $len; ++$c) {
            $this->i = ($this->i + 1) % 256;
            $this->j = ($this->j + $this->s[$this->i]) % 256;
            $t = $this->s[$this->i];
            $this->s[$this->i] = $this->s[$this->j];
            $this->s[$this->j] = $t;

            $t = ($this->s[$this->i] + $this->s[$this->j]) % 256;

            $data[$c] = chr(ord($data[$c]) ^ $this->s[$t]);
        }

        return $data;
    }
}
