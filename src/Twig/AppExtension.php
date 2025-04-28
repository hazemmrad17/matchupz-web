<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('age', [$this, 'calculateAge']),
        ];
    }

    public function calculateAge(\DateTimeInterface $birthdate): int
    {
        $today = new \DateTime();
        $interval = $today->diff($birthdate);
        return $interval->y;
    }
}