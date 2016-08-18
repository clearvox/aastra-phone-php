<?php
namespace Clearvox\Aastra\Phone\Expansion;

use Clearvox\Aastra\Phone\Contracts\SupportsExpansionModuleKeyInterface;
use Clearvox\Aastra\Phone\Contracts\SupportsPaginatedExpansionModuleKeyInterface;

class ExpansionM685i implements
    SupportsExpansionModuleKeyInterface,
    SupportsPaginatedExpansionModuleKeyInterface
{
    /**
     * Returns the number of expansion module keys this device
     * has.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeys()
    {
        return 84;
    }

    /**
     * Returns the number of expansion module keys the device
     * can support per page.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeysPerPage()
    {
        return 28;
    }

    /**
     * Returns the number of total pages it can support
     * of expansion module keys.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeyPages()
    {
        return 3;
    }
}