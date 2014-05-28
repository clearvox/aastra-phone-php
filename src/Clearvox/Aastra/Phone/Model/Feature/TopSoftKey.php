<?php
namespace Clearvox\Aastra\Phone\Model\Feature;

trait TopSoftKey
{
    public function getTopSoftKeyLabel($number = 1)
    {
        return 'topsoftkey' . $number;
    }
}