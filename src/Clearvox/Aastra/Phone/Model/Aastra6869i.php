<?php
namespace Clearvox\Aastra\Phone\Model;

use Clearvox\Aastra\Phone\Contracts\SupportsPaginatedSoftKeyInterface;
use Clearvox\Aastra\Phone\Contracts\SupportsPaginatedTopSoftKeyInterface;
use Clearvox\Aastra\Phone\Model\Feature as Features;

class Aastra6869i implements AastraModelInterface,
    SupportsPaginatedTopSoftKeyInterface,
    SupportsPaginatedSoftKeyInterface
{
    /**
     * Returns the number of lines that the Aastra
     * Phone supports.
     *
     * @return int
     */
    public function numberOfLines()
    {
        return 24;
    }

    /**
     * Returns the number of SoftKeys on the phone
     * or 0 if that model doesn't support SoftKeys
     *
     * @return int
     */
    public function numberOfSoftKeys()
    {
        return 24;
    }

    /**
     * Returns the number of ProgrammableKeys on the
     * phone or 0 if that model doesn't support
     * ProgrammableKeys
     *
     * @return int
     */
    public function numberOfProgrammableKeys()
    {
        return 0;
    }

    /**
     * Returns the number of TopSoftKeys on the phone
     * or 0 if that model doesn't support TopSoftKeys
     *
     * @return int
     */
    public function numberOfTopSoftKeys()
    {
        return 44;
    }

    /**
     * Returns the number of FeatureKeys on the phone
     * or 0 if that model doesn't support FeatureKeys
     *
     * @return int
     */
    public function numberOfFeatureKeys()
    {
        return 0;
    }

    /**
     * Returns the number of HardKeys on the phone or 0
     * if the model doesn't support HardKeys.
     *
     * @return int
     */
    public function numberOfHardKeys()
    {
        return 7;
    }

    /**
     * Returns the number of soft keys the phone can support
     * per page.
     *
     * @return int
     */
    public function numberOfSoftKeysPerPage()
    {
        return 4;
    }

    /**
     * Returns the number of total pages it can support of
     * soft keys.
     *
     * @return int
     */
    public function numberOfSoftKeyPages()
    {
        return 6;
    }

    /**
     * Returns the number of top soft keys the phone can support
     * per page.
     *
     * @return int
     */
    public function numberOfTopSoftKeysPerPage()
    {
        return 11;
    }

    /**
     * Returns the number of total pages of top soft keys that
     * it can support.
     *
     * @return int
     */
    public function numberOfTopSoftKeyPages()
    {
        return 4;
    }
}