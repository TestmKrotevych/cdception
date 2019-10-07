<?php
namespace Page\Acceptance;

class Result
{
    public $box=['id' => 'rso'];

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
   

    /**
     * @var \AcceptanceTester;
     */
    protected $I;

    public function __construct(\AcceptanceTester $I)
    {
        $this->I = $I;
    }
	
    public function checkResults ()
	{
	 $this->I->seeElement($this->box);
	}
	
    

}
