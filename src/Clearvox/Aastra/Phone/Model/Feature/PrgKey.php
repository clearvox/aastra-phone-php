<?php
namespace Clearvox\Aastra\Phone\Model\Feature;

trait PrgKey
{
    public function getPrgKeyLabel($number = 1)
    {
        return 'prgkey' . $number;
    }
}