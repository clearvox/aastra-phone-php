<?php
namespace Clearvox\Aastra\Phone;

use Clearvox\Aastra\Phone\Model\AastraModelInterface;

class Phone
{
    private $model;

    public function __construct(AastraModelInterface $model)
    {
        $this->model = $model;
    }

    public function connected(ConnectedDetails $details)
    {
        return new ConnectedPhone($details, $this->model);
    }
}