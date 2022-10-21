<?php  declare(strict_types=1);

class Customer
{

    protected $type;

    public function __construct($type)
    {
        $this->plan = $type;
    }
}
