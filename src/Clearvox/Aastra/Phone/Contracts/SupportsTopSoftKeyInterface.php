<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsTopSoftKeyInterface
{
    /**
     * Returns the number of TopSoftKeys on the phone
     * or 0 if that model doesn't support TopSoftKeys
     *
     * @return int
     */
    public function numberOfTopSoftKeys();
}