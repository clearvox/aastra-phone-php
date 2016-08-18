<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsExpansionModuleKeyInterface
{
    /**
     * Returns the number of expansion module keys this device
     * has.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeys();
}