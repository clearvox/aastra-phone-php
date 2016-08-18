<?php
namespace Clearvox\Aastra\Phone\Expansion;


use Clearvox\Aastra\Phone\Contracts\SupportsExpansionModuleKeyInterface;

class ExpansionM680i implements
    SupportsExpansionModuleKeyInterface
{
    /**
     * Returns the number of expansion module keys this device
     * has.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeys()
    {
        return 16;
    }
}