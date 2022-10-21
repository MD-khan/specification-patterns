<?php  declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CustomerIsGoldTest extends TestCase
{

    /** @test */
    function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $specification =  new CustomerIsGold;
        $goldCustomer = new Customer('gold');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
    }
}
