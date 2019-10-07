<?php 


class FirstCest
{
    

    
    
    public function tryToTest(AcceptanceTester $I, \Page\Acceptance\GoogleStart $start, \Page\Acceptance\Result $result )
    {
	    $I->amOnpage('/');
	    $start->fillInput ('Java', 3);
	    $start->submit ();
	    $result->checkResults ();
	    
	   
    }
}
