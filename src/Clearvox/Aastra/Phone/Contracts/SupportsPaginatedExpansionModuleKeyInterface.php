<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsPaginatedExpansionModuleKeyInterface
{
    /**
     * Returns the number of expansion module keys the device
     * can support per page.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeysPerPage();

    /**
     * Returns the number of total pages it can support
     * of expansion module keys.
     *
     * @return int
     */
    public function numberOfExpansionModuleKeyPages();
}