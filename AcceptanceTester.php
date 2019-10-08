<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/



class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    
    private $start;
   /**
    * Define custom actions here
    */

    /**
     * @Given I have written a query :query in the text box
     */
     public function iHaveWrittenAQueryInTheTextBox($query)
     {
	    
            $this->amOnpage('/');
            $this->start= new Page\Acceptance\GoogleStart ($this);
	    $this->start->fillInput ($query, 3);
     }

     /**
     * @When I click the submit button
     */
     public function iClickTheSubmitButton( )
     {
         
         $this->start->submit ();
     }

     /**
     * @Then I should see search results
     */
     public function iShouldSeeSearchResults( )
     {
         $result= new Page\Acceptance\Result ($this);
         $result->checkResults ();
     }



     

}
