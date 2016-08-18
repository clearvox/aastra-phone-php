<?php
namespace Clearvox\Aastra\Phone\Model;

use Clearvox\Aastra\Phone\Contracts\SupportsFeatureKeyInterface;
use Clearvox\Aastra\Phone\Contracts\SupportsHardKeyInterface;
use Clearvox\Aastra\Phone\Contracts\SupportsProgrammableKeyInterface;
use Clearvox\Aastra\Phone\Contracts\SupportsSoftKeyInterface;
use Clearvox\Aastra\Phone\Contracts\SupportsTopSoftKeyInterface;

interface AastraModelInterface extends
    SupportsSoftKeyInterface,
    SupportsTopSoftKeyInterface,
    SupportsProgrammableKeyInterface,
    SupportsFeatureKeyInterface,
    SupportsHardKeyInterface
{
    /**
     * Returns the number of lines that the Aastra
     * Phone supports.
     *
     * @return int
     */
    public function numberOfLines();
}