<?php
namespace Clearvox\Aastra\Phone\Model\Feature;

trait SoftKey
{
    public function getSoftKeyLabel($number = 1)
    {
        return 'softkey' . $number;
    }
}