<?php

namespace PhpOffice\PhpSpreadsheet\Document;

use PhpOffice\PhpSpreadsheet\Shared\PasswordHasher;

class Security
{
    /**
     * LockRevision.
<<<<<<< HEAD
     *
     * @var bool
     */
    private $lockRevision = false;

    /**
     * LockStructure.
     *
     * @var bool
     */
    private $lockStructure = false;

    /**
     * LockWindows.
     *
     * @var bool
     */
    private $lockWindows = false;

    /**
     * RevisionsPassword.
     *
     * @var string
     */
    private $revisionsPassword = '';

    /**
     * WorkbookPassword.
     *
     * @var string
     */
    private $workbookPassword = '';
=======
     */
    private bool $lockRevision = false;

    /**
     * LockStructure.
     */
    private bool $lockStructure = false;

    /**
     * LockWindows.
     */
    private bool $lockWindows = false;

    /**
     * RevisionsPassword.
     */
    private string $revisionsPassword = '';

    /**
     * WorkbookPassword.
     */
    private string $workbookPassword = '';
>>>>>>> match

    /**
     * Create a new Document Security instance.
     */
    public function __construct()
    {
    }

    /**
     * Is some sort of document security enabled?
     */
    public function isSecurityEnabled(): bool
    {
<<<<<<< HEAD
        return  $this->lockRevision ||
                $this->lockStructure ||
                $this->lockWindows;
=======
        return $this->lockRevision
                || $this->lockStructure
                || $this->lockWindows;
>>>>>>> match
    }

    public function getLockRevision(): bool
    {
        return $this->lockRevision;
    }

    public function setLockRevision(?bool $locked): self
    {
        if ($locked !== null) {
            $this->lockRevision = $locked;
        }

        return $this;
    }

    public function getLockStructure(): bool
    {
        return $this->lockStructure;
    }

    public function setLockStructure(?bool $locked): self
    {
        if ($locked !== null) {
            $this->lockStructure = $locked;
        }

        return $this;
    }

    public function getLockWindows(): bool
    {
        return $this->lockWindows;
    }

    public function setLockWindows(?bool $locked): self
    {
        if ($locked !== null) {
            $this->lockWindows = $locked;
        }

        return $this;
    }

    public function getRevisionsPassword(): string
    {
        return $this->revisionsPassword;
    }

    /**
     * Set RevisionsPassword.
     *
<<<<<<< HEAD
     * @param string $password
=======
>>>>>>> match
     * @param bool $alreadyHashed If the password has already been hashed, set this to true
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setRevisionsPassword(?string $password, bool $alreadyHashed = false)
=======
    public function setRevisionsPassword(?string $password, bool $alreadyHashed = false): static
>>>>>>> match
    {
        if ($password !== null) {
            if (!$alreadyHashed) {
                $password = PasswordHasher::hashPassword($password);
            }
            $this->revisionsPassword = $password;
        }

        return $this;
    }

    public function getWorkbookPassword(): string
    {
        return $this->workbookPassword;
    }

    /**
     * Set WorkbookPassword.
     *
<<<<<<< HEAD
     * @param string $password
=======
>>>>>>> match
     * @param bool $alreadyHashed If the password has already been hashed, set this to true
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setWorkbookPassword(?string $password, bool $alreadyHashed = false)
=======
    public function setWorkbookPassword(?string $password, bool $alreadyHashed = false): static
>>>>>>> match
    {
        if ($password !== null) {
            if (!$alreadyHashed) {
                $password = PasswordHasher::hashPassword($password);
            }
            $this->workbookPassword = $password;
        }

        return $this;
    }
}
