<?php
namespace Clearvox\Aastra\Phone\Model;

interface AastraModelInterface
{
    /**
     * Returns the number of lines that the Aastra
     * Phone supports.
     *
     * @return int
     */
    public function numberOfLines();

    /**
     * Returns the number of SoftKeys on the phone
     * or 0 if that model doesn't support SoftKeys
     *
     * @return int
     */
    public function numberOfSoftKeys();

    /**
     * Returns the number of ProgrammableKeys on the
     * phone or 0 if that model doesn't support
     * ProgrammableKeys
     *
     * @return int
     */
    public function numberOfProgrammableKeys();

    /**
     * Returns the number of TopSoftKeys on the phone
     * or 0 if that model doesn't support TopSoftKeys
     *
     * @return int
     */
    public function numberOfTopSoftKeys();

    /**
     * Returns the number of FeatureKeys on the phone
     * or 0 if that model doesn't support FeatureKeys
     *
     * @return int
     */
    public function numberOfFeatureKeys();

    /**
     * Returns the number of HardKeys on the phone or 0
     * if the model doesn't support HardKeys.
     *
     * @return int
     */
    public function numberOfHardKeys();
}