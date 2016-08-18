<?php
namespace Clearvox\Aastra\Phone\Contracts;

interface SupportsProgrammableKeyInterface
{
    /**
     * Returns the number of ProgrammableKeys on the
     * phone or 0 if that model doesn't support
     * ProgrammableKeys
     *
     * @return int
     */
    public function numberOfProgrammableKeys();
}