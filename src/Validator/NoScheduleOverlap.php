<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class NoScheduleOverlap extends Constraint
{
    public string $exactMatchMessage = '"Un horaire avec cette date, heure de début et heure de fin existe déjà.';
    public string $overlapMessage = 'La plage horaire chevauche un horaire existant à cette date.';

    public function validatedBy(): string
    {
        return NoScheduleOverlapValidator::class;
    }

    public function getTargets(): string
    {
        return self::CLASS_CONSTRAINT;
    }
}