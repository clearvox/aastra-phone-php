<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsSoftKeyInterface
{
    

    /**
     * Returns the number of SoftKeys on the phone
     * or 0 if that model doesn't support SoftKeys
     *
     * @return int
     */
    public function numberOfSoftKeys();
}