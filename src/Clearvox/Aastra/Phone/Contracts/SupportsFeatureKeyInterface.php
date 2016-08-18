<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsFeatureKeyInterface
{
    /**
     * Returns the number of FeatureKeys on the phone
     * or 0 if that model doesn't support FeatureKeys
     *
     * @return int
     */
    public function numberOfFeatureKeys();
}