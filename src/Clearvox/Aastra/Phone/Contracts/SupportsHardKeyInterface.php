<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsHardKeyInterface
{
    /**
     * Returns the number of HardKeys on the phone or 0
     * if the model doesn't support HardKeys.
     *
     * @return int
     */
    public function numberOfHardKeys();
}