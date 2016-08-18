<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsPaginatedSoftKeyInterface
{
    /**
     * Returns the number of soft keys the phone can support
     * per page.
     *
     * @return int
     */
    public function numberOfSoftKeysPerPage();

    /**
     * Returns the number of total pages it can support of
     * soft keys.
     *
     * @return int
     */
    public function numberOfSoftKeyPages();
}