<?php

namespace App\Doctrine\DBAL\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class EnumType extends Type
{
    public function getSQLDeclaration(array $column, AbstractPlatform $platform)
    {
        // Fallback to VARCHAR if columnDefinition isn't specified
        return $column['columnDefinition'] ?? 'VARCHAR(255)';
    }

    public function getName()
    {
        return 'enum';
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}