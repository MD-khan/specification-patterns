<?php

class CustomerIsGold
{

    public function isSatisfiedBy(Customer $customer)
    {
        return $this->typee == 'gold';
    }
}
