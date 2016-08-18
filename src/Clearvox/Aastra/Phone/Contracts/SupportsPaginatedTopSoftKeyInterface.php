<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsPaginatedTopSoftKeyInterface
{
    /**
     * Returns the number of top soft keys the phone can support
     * per page.
     *
     * @return int
     */
    public function numberOfTopSoftKeysPerPage();

    /**
     * Returns the number of total pages of top soft keys that
     * it can support.
     *
     * @return int
     */
    public function numberOfTopSoftKeyPages();
}