<?php 

class FirstCest
{
    

    
    public function tryToTest(AcceptanceTester $I)
    {
	    $I->amOnpage('/');
	    echo "Hello";
	    #$I->seeElement(['name' => 'q']);
	    $I->waitForElementVisible(['name' => 'q'], 3);
	    $I->fillField('q', 'java');
	    $I->waitForElementVisible(['name' => 'btnK'], 3);
	    #$I->click(['name' => 'btnK']);
	    $I->click('btnK');
	    $I->seeElement(['id' => 'rso']);
	    
	   
    }
}
